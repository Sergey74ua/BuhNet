<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // User (access)
    public function __construct()
    {
        //
        $this->middleware('auth');
    }

    // User (get)
    public function user_get($name = null)
    {
        //
        return view('auth.profile');
    }

    // User (post)
    public function user_post(Request $data)
    {
        //
        return view('auth.profil');
    }
}
