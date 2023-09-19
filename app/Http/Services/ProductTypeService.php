<?php

namespace App\Http\Services;

use App\Models\ProductType;

class ProductTypeService {
    
    // get all product types
    public static function all()
    {
        $productTypes = ProductType::all();

        return $productTypes;
    }

    // create a new product type
    public static function store(array $productTypeData)
    {
        $productType = ProductType::create([
            'name' => $productTypeData['name'],
        ]);

        return $productType;
    }

    // modify an existing product type
    public static function update(array $productTypeData)
    {
        $productType->update($productTypeData);

        return $productType;
    }
}