<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        return $user->get();
    }
}

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('users/index')->with(['users' => $user->get()]);  
    }
}