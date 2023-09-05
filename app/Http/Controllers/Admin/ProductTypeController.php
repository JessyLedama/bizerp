<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\ProductTypeService;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProductTypeService $productTypeService)
    {
        $productTypes = $productTypeService->all();

        return view('admin.modules.productTypes.index', compact('productTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.productTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ProductTypeService $productTypeService)
    {
        $productTypeData = [
            'name' => $request->name,
        ];

        $productTypeService->store($productTypeData);

        session()->flash('success', 'Your product type has been saved.');

        return redirect()->route('productTypes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductType $productType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductType $productType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductType $productType)
    {
        //
    }
}
