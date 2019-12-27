<?php

namespace App\Http\Controllers;

use DB;
use App\Company;
use App\Product;
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
        //$companies = DB::table('companies')->where('id', $id)->get();
        $companies = Company::where('id', $id)->get();
        //$products = $companies->getProductsFromCompany()->get();
        return view('company', ['companies' => $companies]);
    }

    public function createCompany(Request $request_name, Request $request_description, Request $request_created)
    {
        $date = date('Y-m-d H:i:s');
        $company_name           = $request_name->input('company_name');
        $company_description    = $request_description->input('company_description');
        $company_created        = $request_created->input('company_created');

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
