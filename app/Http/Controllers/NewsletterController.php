<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    protected int $nbrPerPage = 20;


    /**
     * Display a listing of users who subscribed to the newsletter.
     */
    public function index()
    {

        $newsletters = Newsletter::orderBy('created_at', 'desc')
            ->paginate($this->nbrPerPage);

        // If no result found return to the newsletter page
        if ($newsletters->isEmpty()) {
            return redirect('/admin/newsletter');
        }

        return view('admin.newsletter', [
            'newsletters' => $newsletters
        ]);
    }

    /**
     * Store contact of newsletter by async request
     */
    public function store()
    {

        try {
            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email|unique:newsletter_list,email'
            ]);
        } catch (ValidationException $e) {
            // convert errors to json
            $errors = json_encode($e->errors());
            // Set code http 422 and return json
            return response($errors, '422');
        }

        $newsletter = new Newsletter();
        $newsletter->name = request('name');
        $newsletter->email = request('email');
        $newsletter->save();
        // Set code http 200 and return json
        return response('success', 200);
    }

    /**
     * Search contant in the newsletter by name or email.
     */
    public function search()
    {
        // If post context save it in session
        if (request()->isMethod('post')) {
            $email = request('email') ?? "";
            $name = request('name') ?? "";
            session()->put('email', $email);
            session()->put('name', $name);
        } else {
            $email = session('email') ?? "";
            $name = session('name') ?? "";
        }

        $newsletters = null;

        if ($email == "" && $name == "") {
            return redirect('/admin/newsletter');
        } elseif ($email == "" && $name != "") {
            $newsletters = Newsletter::where('name', 'LIKE', "%{$name}%")
                ->orderBy('created_at', 'desc')
                ->paginate($this->nbrPerPage);

        } elseif ($email != "" && $name == "") {
            $newsletters = Newsletter::where('email', 'LIKE', "%{$email}%")
                ->orderBy('created_at', 'desc')
                ->paginate($this->nbrPerPage);
        } else {
            $newsletters = Newsletter::where('name', 'LIKE', "%{$name}%")
                ->where('email', 'LIKE', "%{$email}%")
                ->orderBy('created_at', 'desc')
                ->paginate($this->nbrPerPage);
        }

        // If no result found return to the newsletter page
        if ($newsletters->isEmpty()) {
            return redirect('/admin/newsletter');
        }

        return view('admin.newsletter', [
            'newsletters' => $newsletters]);
    }

    /**
     * Remove the specified contact from the newsletter.
     * @throws ValidationException
     */
    public function destroy()
    {
        $this->validate(request(), [
            'data_remove_id' => 'required'
        ]);
        $id = request('data_remove_id');
        $newsletter = Newsletter::find($id);
        $newsletter->delete();
        // Set message to be displayed in the view
        session()->flash('success', 'Contact supprimé de la newsletter');
        return redirect()->back();
    }

    /**
     * Export the newsletter list to a csv file.
     */
    public function export()
    {
        $newsletters = Newsletter::all();
        $filename = "newsletter.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array('ID', 'Nom', 'Email', 'Date d\'inscription'));
        foreach ($newsletters as $newsletter) {
            fputcsv($handle, array($newsletter->id, $newsletter->name, $newsletter->email, $newsletter->created_at));
        }
        fclose($handle);
        $headers = array(
            'Content-Type' => 'text/csv',
        );
        return response()->download($filename, 'newsletter.csv', $headers);
    }
}
