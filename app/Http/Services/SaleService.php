<?php

namespace App\Http\Services;

use App\Models\Product;
use App\Models\Sale;
use App\Http\Services\StatusService;

class SaleService 
{
    // get all sales
    public function all()
    {
        $sales = Sale::with('status')
            ->with('customer')
            ->with('salesperson')
            ->get();

        return $sales;
    }

    // store a new sale
    public function store(array $saleData)
    {
        // compute new sale order number. last so number + 1.
        $lastSaleNumber = Sale::latest()->first('number') ?? ['number'=> '000'];

        $newSaleNumber = $lastSaleNumber['number'] + 1;

        $newSaleNumber = sprintf("%03d", $newSaleNumber);

        // draft status
        $draftStatus = StatusService::draft()->id;

        // dd($draftStatus);

        // create a new SO in the db.
        $sale = Sale::create([
            'number' => $newSaleNumber, 
            'customerId' => $saleData['customerId'], 
            'products' => $saleData['products'], 
            'salespersonId' => $saleData['salespersonId'], 
            'statusId' => $draftStatus, 
            'orderTotal' => $saleData['orderTotal'],
        ]);

        return $sale;
    }

    // update a sale
    public function update(array $saleData, Sale $sale)
    {
        $sale->update($saleData);

        return $sale;
    }
}