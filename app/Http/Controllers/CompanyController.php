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
        return view('dashboard.companies', ['companies' => $companies]);
    }

    public function viewCompany($id)
    {
        $companies = Company::where('id', $id)->get();
        //$products = Company::with('getProductsFromCompany')->where('id', $id)->get();
        return view('dashboard.company', ['companies' => $companies]);
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

        $dateTime = date_create($company_created);
        $convertedDateTime = date_format($dateTime, 'Y-m-d H:i:s');

        $find_company = Company::where('company', $company_name);

        if ($company_name != NULL && $company_description != NULL)
        {
            if (!$find_company && strtolower($company_name) != strtolower($find_company[0]->company))
            {
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
                        'created_at'    => $convertedDateTime,
                        'updated_at'    => $date
                    ]);
                }
                echo "The New Company inserted in the database<br>";
            }
            else echo "The Company already exists in the database<br>";
        }
        else 
        {
            echo "There is missing field(s): ";      
            if ($company_name == NULL)
            {
                echo "Company Name ";
            }
            if ($company_description == NULL)
            {
                echo "Company Description ";
            }
            echo "<br>";
        }
        echo 'Click <a href="/companies">here</a> to return to the companies list<br>';
    }
}
