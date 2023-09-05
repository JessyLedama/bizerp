<?php

namespace App\Http\Services;

use App\Models\Product;

class ProductService 
{
    // get all products
    public function all()
    {
        $products = Product::all();

        return $products;
    }

    // store a new product
    public function store(array $productData)
    {
        $product = Product::create($productData);

        return $product;
    }

    // update a product
    public function update(array $productData, Product $product)
    {
        $product->update($productData);

        return $product;
    }
}