<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use App\Models\companies;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cabinet()
    {
        return view('cab.cabinet', ['data' => ['Операции', 'Журналы', 'Отчеты']]);
    }

    // Company 
    public function company_get()
    {
        return view('cab.company');
    }

    // New company 
    public function company_post(CompanyRequest $data)
    {
        /*$company = new companies();

        $company->INN()             = $data->input('INN');
        $company->name()            = $data->input('name');
        $company->status()          = $data->input('status');
        $company->taxation()        = $data->input('taxation');
        $company->KPP()             = $data->input('KPP');
        $company->OGRN()            = $data->input('OGRN');
        $company->OKFS()            = $data->input('OKFS');
        $company->OKVED()           = $data->input('OKVED');
        $company->IFNS()            = $data->input('IFNS');
        $company->OKPO()            = $data->input('OKPO');
        $company->OKOPF()           = $data->input('OKOPF');
        $company->OKOGU()           = $data->input('OKOGU');
        $company->OKTMO()           = $data->input('OKTMO');
        $company->OKATO()           = $data->input('OKATO');
        $company->PFR()             = $data->input('PFR');
        $company->FSS()             = $data->input('FSS');
        $company->bank()            = $data->input('bank');
        $company->account()         = $data->input('account');
        $company->phone()           = $data->input('phone');
        $company->opening()         = $data->input('opening');
        $company->table_units()     = $data->input('table_units');
        $company->table_operation() = $data->input('table_operation');
        $company->fullname()        = $data->input('fullname');
        $company->email()           = $data->input('email');
        $company->director()        = $data->input('director');
        $company->rank()            = $data->input('rank');
        $company->certificate()     = $data->input('certificate');
        $company->address()         = $data->input('address');
        $company->founder()         = $data->input('founder');
        $company->registrar()       = $data->input('registrar');
        $company->logo()            = $data->input('logo');
        $company->photo()           = $data->input('photo');
        $company->description()     = $data->input('description');

        $company->save();*/

        //return view('cab.company');
        return $data;
    }

    // Operation 
    public function operation_get()
    {
        return view('cab.mode_one');
    }

    // Operations
    public function operation_post(Request $data)
    {
        return view('cab.mode_one');
    }
}
