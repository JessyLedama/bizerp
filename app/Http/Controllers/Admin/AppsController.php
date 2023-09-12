<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppsController extends Controller
{
    /**
     *  List all available modules.
     */
    public function index()
    {
        return view('admin.modules.index');
    }
}
