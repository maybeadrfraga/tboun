<?php


namespace App\Http\Controllers;

use App\Services\WooCommerceService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $wooCommerceService;

    public function __construct(WooCommerceService $wooCommerceService)
    {
        $this->wooCommerceService = $wooCommerceService;
    }

    public function index()
    {
        $products = $this->wooCommerceService->getProducts();

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = $this->wooCommerceService->getProduct($id);

        return view('products.show', compact('product'));
    }
}
