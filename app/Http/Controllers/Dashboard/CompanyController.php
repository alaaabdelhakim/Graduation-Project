<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies= Company::all();
        return view('dashboard.companies.index', compact('companies'));
    }

    public function create()
    {
        return view('dashboard.companies.create');
    }

    public function store(Request $request)
    {
        $company = new company;

            $image = $request->file('image');
            $input['image'] = time(). '.' .$image->getClientOriginalExtension();
            $dist = public_path('/images/companies/');
            $image->move($dist, $input['image']);
            $company->image=$input['image'];

            $company->c_name=$request->c_name;
            $company->c_link=$request->c_link;
            $company->c_address=$request->c_address;
            $company->c_phone=$request->c_phone;
            $company->c_service=$request->c_service;



        $company->save();

        
        toast('company Added Successfully!','success');
        return redirect()->route('dashboard.companies.index');
    }


    public function show(company $company)
    {
        //
    }


    public function edit(company $company)
    {
        return view('dashboard.companies.edit', compact('company'));
    }


    public function update(Request $request, company $company)
    {
        $companies = company::find($request->id);

        if ($request->image) {

            $image = $request->file('image');
            $input['image'] = time(). '.' .$image->getClientOriginalExtension();
            $dist = public_path('/images/companies/');
            $image->move($dist, $input['image']);
            $company->image=$input['image'];

        }//end of if

        $company->c_name=$request->c_name;
        $company->c_link=$request->c_link;
        $company->c_address=$request->c_address;
        $company->c_phone=$request->c_phone;
        $company->c_service=$request->c_service;

        $company->save();

        toast('company Updated Successfully!','success');
        return redirect()->route('dashboard.companies.index');
    }

    public function destroy(company $company)
    {
        $company->delete();
        toast('Data Deleted Successfully!','success');
        return redirect()->route('dashboard.companies.index');
    }
}
