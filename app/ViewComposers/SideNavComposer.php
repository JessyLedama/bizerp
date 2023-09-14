<?php

namespace App\ViewComposers;

use Illuminate\View\View;
use App\Services\ProductService;
use App\Models\Product;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Route;


class SideNavComposer 
{
    
    // get all variables for navbar
    public function compose(View $view)
    {
        $sideNavLinks = [
            'products' => Product::all(),
        ];

        $currentURL = Route::current()->getName();
        $urlData = explode(".", $currentURL);


        $view->with('sideNavLinks', $sideNavLinks)
            ->with('urlData', $urlData);
    }
}