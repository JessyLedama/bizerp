<?php

namespace App\Http\Services;

use App\Models\ProductType;

class ProductTypeService {
    
    // get all product types
    public function all()
    {
        $productTypes = ProductType::all();

        return $productTypes;
    }

    // create a new product type
    public function store(array $productTypeData)
    {
        $productType = ProductType::create($productTypeData);

        return $productType;
    }

    // modify an existing product type
    public function update(array $productTypeData)
    {
        $productType->update($productTypeData);

        return $productType;
    }
}