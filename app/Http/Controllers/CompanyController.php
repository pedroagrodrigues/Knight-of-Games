<?php

namespace App\Http\Controllers;

use DB;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('companies', ['companies' => $companies]);
    }

    public function viewCompany($id)
    {
        $companies = Company::where('id', $id)->get();
        //$products = Company::with('getProductsFromCompany')->where('id', $id)->get();
        return view('company', ['companies' => $companies]);
    }

    public function beforeCreateNewCompany()
    {
        return view('company_create'); 
    }

    public function createCompany(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $company_name           = $request->input('company_name');
        $company_description    = $request->input('company_description');
        $company_created        = $request->input('company_created');

        if ($company_created == NULL)
        {
            $company = Company::create([
                'company'       => $company_name,
                'description'   => $company_description,
                'created_at'    => $date,
                'updated_at'    => $date
            ]);
        }
        else 
        {
            $company = Company::create([
                'company'       => $company_name,
                'description'   => $company_description,
                'created_at'    => $company_created,
                'updated_at'    => $date
            ]);
        }
    }
}
