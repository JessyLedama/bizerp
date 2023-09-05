<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\ProductService;
use App\Http\Services\ProductTypeService;
use App\Http\Services\UserService;
use App\Models\Status;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProductService $productService)
    {
        $products = $productService->all();

        return view('admin.modules.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ProductTypeService $productTypeService, UserService $userService)
    {
        $productTypes = $productTypeService->all();
        $vendors = $userService->vendors();

        return view('admin.modules.products.create', compact('productTypes', 'vendors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ProductService $productService)
    {
        $status = Status::where('name', 'Active')->first();

        $productData = [
            'name' => $request->name,
            'type' => $request->typeId, 
            'price' => $request->price,  
            'statusId' =>$status->id,
            'photo' => $request->photo,
            'buyable' => $request->buyable,
            'sellable' => $request->sellable,
            'description' => $request->description,
            'vendorId' => $request->vendorId,
        ];

        $productService->store($productData);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
