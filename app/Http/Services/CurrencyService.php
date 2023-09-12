<?php

namespace App\Http\Services;

use App\Models\Currency;

class CurrencyService
{
    // get all currencies
    public function all()
    {
        $currencies = Currency::all();

        return $currencies;
    }

    // show selected currency
    public function show(string $slug)
    {
        $currency = Currency::find($slug);

        return $currency;
    }

    // store a new currency
    public function store(array $currencyData)
    {
        $currency = Currency::create($currencyData);

        return $currency;
    }

    // modify existing currency details
    public function update(array $currencyData, Currency $currency)
    {
        $currency->update($currencyData);

        return $currency;
    }
}