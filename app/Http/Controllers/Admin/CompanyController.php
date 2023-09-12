<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\CompanyService;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CompanyService $companyService)
    {
        $companies = $companyService->all();

        return view('admin.settings.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.settings.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug, CompanyService $companyService)
    {
        $company = $companyService->find($slug);

        return view('admin.settings.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyService $companyService)
    {
        $slug = strtolower(str_replace(" ", "-", $request->name));

        $companyData = [
            'name' => $request->name,
            'slug' => $slug,
            'currencyId' => $request->currencyId, 
            'phone' => $request->phone, 
            'email' => $request->email, 
            'website' => $request->website, 
            'taxid' => $request->taxid, 
            'logo' => $request->logo, 
            'street' => $request->street, 
            'cityId' => $request->cityIf, 
            'countryId' => $request->countryId,
        ];

        $company = $companyService->update($companyData);

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
