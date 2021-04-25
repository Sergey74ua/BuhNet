<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Admin (access)
    public function __construct()
    {
        //
        $this->middleware('auth');
    }

    // Admin (get)
    public function admin_get($page = null)
    {
        //
        return view('adm.panel');
    }

    // Admin (post)
    public function admin_post(Request $data)
    {
        //
        return view('adm.panel');
    }
}
