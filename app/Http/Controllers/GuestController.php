<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    // Guest (get)
    public function welcome()
    {
        return view('welcome');
    }
}
