<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('companies', ['companies' => $companies]);
    }

    public function viewCompany($id)
    {
        $companies = Company::where('id', $id)->get();
        //$companyID = DB::table('companies')->where('companies.id', $id)->first();
        return view('company/{id}', ['companies' => $companies]);
    }

    public function createNewCompany($id)
    {

    }
}
