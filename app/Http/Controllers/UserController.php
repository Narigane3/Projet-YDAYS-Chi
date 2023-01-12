<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display the index of user view of user
     * @return View
     */
    public function index(): View
    {
        $model = new User();

        $users = $model->getAllUsers();

        return view('admin.user.index', ['users' => $users]);
    }

    /**
     * Display view for create new user
     * @return View
     */
    public function creat(): View
    {
        return view('admin.user.gestion');
    }

    public function edit(int $user_id): view|Application
    {
        $userModel = new User();
        $user = $userModel->getUserById($user_id);

        return view('admin.user.gestion', ['user' => $user]);
    }

    /**
     * Store the new user in DB
     */
    public function store(Request $request): string
    {
        $request->validate([
            'firstname' => 'required | max:150 | string',
            'lastname' => 'required | max:150 | string',
            'username' => 'required | unique:users|max:255 | string',
            'email' => 'required | unique:users| email | max:255',
            'password' => 'required|confirmed',
            'phone' => 'max:12',
            'role' => 'numeric'
        ]);

        // make hash of password
        $password = $request->input('firstname');
        $hashedPassword = Hash::make($password, ['rounds' => 12]);

        $role = 1;

        switch ($request->input('role')) {
            case '2':
                $role = 2;
                break;
            case'3':
                $role = 3;
                break;
            default:
                break;
        }

        User::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $hashedPassword,
            'phone' => $request->input('phone'),
            'role_id' => $role
        ]);

        return redirect('/admin/users');
    }

    public function update(Request $request, $user_id): Redirector|Application|RedirectResponse
    {

        $request->validate([
            'firstname' => 'required | max:150 | string',
            'lastname' => 'required | max:150 | string',
            'phone' => 'max:12',
            'role' => 'numeric'
        ]);

        $role = 1;

        switch ($request->input('role')) {
            case '2':
                $role = 2;
                break;
            case'3':
                $role = 3;
                break;
            default:
                break;
        }

        User::where('id', '=', $user_id)->update([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'phone' => $request->input('phone') ?? "",
            'role_id' => $role
        ]);

        return redirect('/admin/users');
    }

    public function remove(Request $request): Redirector|Application|RedirectResponse
    {

        $request->validate([
            'data_remove_id' => 'required|present'
        ]);

        User::find($request->input('data_remove_id'))->update(
            ['status' => '2', 'email' => null, 'firstname' => 'deleted', 'lastname' => 'deleted', 'phone' => '*******', 'password' => '*****']);

        return redirect('/admin/users');
    }

}
