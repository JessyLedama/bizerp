<?php

namespace App\ViewComposers;

use Illuminate\View\View;
use App\Services\ProductService;
use App\Models\Product;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Route;

class NavComposer 
{
    
    // get all variables for navbar
    public function compose(View $view)
    {
        $navLinks = [
            'products' => Product::all(),
        ];

        $currentURL = Route::current()->getName();

        dd($currentURL);

        $view->with('navLinks', $navLinks, $currentURL);
    }
}