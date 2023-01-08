<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        return view('admin.user.index', [
            'users' => User::all()->where('status', "=", '1')
        ]);
    }

    /**
     * Display view for create new user
     * @return View
     */
    public function creat(): View
    {
        return view('admin.user.gestion');
    }

    /**
     * Store the new user in DB
     */
    public function store(Request $request): View
    {

        $validated = $request->validate([
            'firstname' => 'required | max:150 | string',
            'lastname' => 'required | max:150 | string',
            'username' => 'required | unique:users|max:255 | string',
            'email' => 'required | unique:users| email | max:255',
            'password' => 'required|confirmed',
            'phone' => 'max:12 | string',
            'role' => 'numeric |'
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

        return view('admin.user.index', [
            'users' => User::all()->where('status', "=", '1')
        ]);
    }

}
