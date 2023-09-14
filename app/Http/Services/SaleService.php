<?php

namespace App\Http\Services;

use App\Models\Product;
use App\Models\Sale;

class SaleService 
{
    // get all sales
    public function all()
    {
        $sales = Sale::all();

        return $sales;
    }

    // store a new sale
    public function store(array $saleData)
    {
        $sale = Sale::create($saleData);

        return $sale;
    }

    // update a sale
    public function update(array $saleData, Sale $sale)
    {
        $sale->update($saleData);

        return $sale;
    }
}