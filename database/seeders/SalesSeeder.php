<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sale;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $salesData = [
            [
                'number' => 'SO001',
                'customerId' => '2',
                'products' => 'a lot of products',
                'salespersonId' => '1',
                'statusId' => '1',
            ],

            [
                'number' => 'SO002',
                'customerId' => '2',
                'products' => 'a lot of products',
                'salespersonId' => '1',
                'statusId' => '1',
            ],
        ];

        $sales = Sale::all();

        if(count($sales) == 0)
        {
            foreach($salesData as $sale)
            {
                Sale::create($sale);
            }
        }
    }
}
