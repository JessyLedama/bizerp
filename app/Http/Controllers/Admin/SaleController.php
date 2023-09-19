<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserType;
use App\Models\User;
use App\Http\Services\SaleService;
use App\Http\Services\UserService;
use App\Http\Services\StatusService;
use App\Http\Services\ProductService;
use Auth;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SaleService $saleService)
    {
        $sales = $saleService->all();

        return view('admin.modules.sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(UserService $userService, ProductService $productService)
    {
        
        $customers = $userService->customers();
        $products = $productService->all();

        return view('admin.modules.sales.create', compact('customers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, SaleService $saleService)
    {
        $products = $request->products;
        $draftStatusId= strval(StatusService::draft()->id);
        $orderTotal = '200';

        $saleData = [
            'number' => 'SO006', 
            'customerId' => $request->customerId, 
            'products' => $products, 
            'salespersonId' => Auth::id(), 
            'statusId' => $draftStatusId, 
            'orderTotal' => $orderTotal,
        ];


        $saleService->store($saleData);

        return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        return view('admin.status.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
