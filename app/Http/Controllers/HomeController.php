<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use App\Models\companies;
use App\Models\operations;

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
        /* return view('cab.home', ['company' => companies::all()]); */
        return view('cab.company');
    }

    // New company 
    public function company_post(CompanyRequest $data)
    {
        $company = new companies();

        $company->inn             = $data->input('inn');
        $company->name            = $data->input('name');
        $company->status          = $data->input('status');
        $company->taxation        = $data->input('taxation');
        $company->kpp             = $data->input('kpp');
        $company->ogrn            = $data->input('ogrn');
        $company->okfs            = $data->input('okfs');
        $company->okved           = $data->input('okved');
        $company->ifns            = $data->input('ifns');
        $company->okpo            = $data->input('okpo');
        $company->okopf           = $data->input('okopf');
        $company->okogu           = $data->input('okogu');
        $company->oktmo           = $data->input('oktmo');
        $company->okato           = $data->input('okato');
        $company->pfr             = $data->input('pfr');
        $company->fss             = $data->input('fss');
        $company->bik             = $data->input('bik');
        $company->account         = $data->input('account');
        $company->phone           = $data->input('phone');
        $company->opening         = $data->input('opening');
        $company->table_units     = $data->input('table_units');
        $company->table_operation = $data->input('table_operation');
        $company->fullname        = $data->input('fullname');
        $company->email           = $data->input('email');
        $company->director        = $data->input('director');
        $company->rank            = $data->input('rank');
        $company->certificate     = $data->input('certificate');
        $company->address         = $data->input('address');
        $company->founder         = $data->input('founder');
        $company->registrar       = $data->input('registrar');
        $company->logo            = $data->input('logo');
        $company->photo           = $data->input('photo');
        $company->description     = $data->input('description');

        $company->status          = 'New';
        $company->table_units     = 'admin';
        $company->table_operation = 'admin';

        $company->save();

        return redirect()->route('company');
    }

    // Operation 
    public function operation_get()
    {
        //return view('cab.cabinet');
        return view('cab.cabinet', ['data' => operations::all()]);
    }

    // Operations
    public function operation_post(Request $data)
    {
        $operation = new operations();

        $operation->type_id       = $data->input('type_id');
        $operation->partner_id    = $data->input('partner_id');
        $operation->target        = $data->input('target');
        $operation->document      = $data->input('document');
        $operation->verification  = $data->input('verification');
        $operation->date          = $data->input('date');
        $operation->number        = $data->input('number');
        $operation->dating        = $data->input('dating');
        $operation->sum           = $data->input('sum');
        $operation->purpose       = $data->input('purpose');

        $operation->user_id       = 1;
        $operation->link          = 'link';

        $operation->save();

        return view('cab.cabinet', ['data' => operations::all()]);
        //return redirect()->route('user_post');
    }
}
