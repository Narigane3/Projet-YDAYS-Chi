<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display the index of user view of user
     * @return View
     */
    public function index(){
        return view('admin.user.user_manager',[
            'users'=> User::all()->where('status',"=",'1')
        ]);
    }
}
