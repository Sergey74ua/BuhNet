<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import models
use App\Models\User;
use App\Models\companies;

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
        // Корневая страница (по умолчанию)
        if ($page == null) {
            return view('adm.panel', ['data' => ['Пользователи', 'Компании']]);
        }

        // Список пользователей
        if ($page == 'users') {
            return view('adm.panel', ['data' => User::all()]);
        }

        // Список компаний
        if ($page == 'companies') {
            return view('adm.panel', ['data' => companies::all()]);
        }

        // Список операция
        if ($page == 'operations') {
            return view('adm.panel', ['data' => ['добавить вывод списка операций по выбранной компании']]);
        }
    }

    // Admin (post)
    public function admin_post(Request $data)
    {
        //
        return view('adm.panel');
    }
}
