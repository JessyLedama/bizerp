<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencyData = [
            [
                'name' => 'Kenya Shilling',
                'sign' => 'KES',
                'slug' => 'kenya-shilling',
            ],

            [
                'name' => 'Uganda Shilling',
                'sign' => 'UGX',
                'slug' => 'uganda-shilling',
            ],

            [
                'name' => 'Tanzania Shilling',
                'sign' => 'TZS',
                'slug' => 'tanzania-shilling',
            ],
        ];

        $currencies = Currency::all();

        if(count($currencies) == 0)
        {
            foreach($currencyData as $currency)
            {
                Currency::create($currency);
            }
        }
    }
}
