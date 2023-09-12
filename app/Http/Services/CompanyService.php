<?php

namespace App\Http\Services;

use App\Models\Company;

class CompanyService
{
    // get all companies
    public function all()
    {
        $companies = Company::all();

        return $companies;
    }

    // find a specific company
    public function find(string $slug)
    {
        $company = Company::where('slug', $slug)->first();

        return $company;
    }

    // show selected company
    public function show(string $slug)
    {
        $company = Company::find($slug);

        return $company;
    }

    // store a new company
    public function store(array $companyData)
    {
        $company = Product::create($companyData);

        return $company;
    }

    // modify existing company details
    public function update(array $companyData)
    {
        // $company->update($companyData);

        $company = Company::find('slug', $companyData['slug']);

        dd($companyData['slug']);

        $company->update($companyData);

        return $company;
    }
}