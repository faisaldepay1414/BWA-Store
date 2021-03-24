<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard-products');
    }

    public function details()
    {
        return view('pages.admin.dashboard-products-details');
    }
}
