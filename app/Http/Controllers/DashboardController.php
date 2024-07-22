<?php

namespace App\Http\Controllers;
use App\Services\WooCommerceService;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(WooCommerceService $wooCommerce){
        $products = $wooCommerce->get('products');
        dd($products);
        return view('dashboard.index');
    }
}
