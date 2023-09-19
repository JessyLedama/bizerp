<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sale;
use App\Http\Services\StatusService;
use App\Http\Services\SaleService;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(SaleService $saleService): void
    {
        $draftId = strval(StatusService::draft()->id);

        $salesData = [
            [
                'number' => '001',
                'customerId' => '2',
                'products' => 'a lot of products',
                'salespersonId' => '1',
                'statusId' => $draftId,
                'orderTotal' => '200',
            ],

            [
                'number' => '002',
                'customerId' => '2',
                'products' => 'a lot of products',
                'salespersonId' => '1',
                'statusId' => $draftId,
                'orderTotal' => '200',
            ],
        ];

        $sales = $saleService->all();

        if(count($sales) == 0)
        {
            foreach($salesData as $saleData)
            {
                $saleService->store($saleData);
            }
        }
    }
}
