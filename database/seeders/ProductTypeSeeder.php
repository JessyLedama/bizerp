<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Services\ProductTypeService;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productTypesData = [
            [
                'name' => 'Service',
            ],

            [
                'name' => 'Storable Product',
            ],

            [
                'name' => 'Consumable',
            ],
        ];

        $productTypes = ProductTypeService::all();

        if(!isset($productTypes))
        {
            foreach($productTypesData as $productType)
            {
                ProductTypeService::store($productType);
            }
        }
    }
}
