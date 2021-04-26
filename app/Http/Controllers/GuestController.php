<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    // Guest
    public function index()
    {
        return view('index');
    }

    // Page
    public function page()
    {
        return view('page');
    }

    // Calc
    public function calc()
    {
        return view('calc');
    }

    // Blog
    public function blog()
    {
        return view('blog');
    }

    // Catalog
    public function catalog()
    {
        return view('catalog');
    }

    // Catalog
    public function card($id)
    {
        //
        return view('card');
    }
}
