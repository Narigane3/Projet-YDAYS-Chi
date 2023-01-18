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

        // Get password
        $password = $request->input('password');

        // make hash of password
        $hashedPassword = Hash::make($password);
        // Default is User
        $role = 1;

        switch ($request->input('role')) {
            case '2': // editor
                $role = 2;
                break;
            case'3': // Admin
                $role = 3;
                break;
            default:
                break;
        }

        if ($role === 3 && auth()->user()['role_id'] != 4) {
           return redirect('/admin/users');
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
        // Block l'attribution du role admin si l'user n'est pas un super admin
        if ($role === 3 && auth()->user()['role_id'] != 4) {
            return redirect('/admin/users');
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
