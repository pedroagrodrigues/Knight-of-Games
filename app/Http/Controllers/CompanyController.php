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
        $companies = DB::table('companies')->where('id', $id)->get();
        return view('company', ['companies' => $companies]);
    }

    public function createCompany(Request $request_name, Request $request_description, Request $request_time_at)
    {

    }
}
