<?php

namespace App\Http\Controllers;

use App\Services\WooCommerceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    protected $wooCommerceService;

    public function __construct(WooCommerceService $wooCommerceService)
    {
        $this->wooCommerceService = $wooCommerceService;
    }

    public function index()
    {
        $products = $this->wooCommerceService->getProducts();
        if (auth()->user()->isAdmin()) {
            $orders = $this->wooCommerceService->getOrders();
            return view('orders.index', compact('orders'));
        } else {
            $email = auth()->user()->email;

            if (!$email) {
                return redirect()->back()->withErrors(['email' => 'Email is required']);
            }
    
            // Obter todos os pedidos
            $allOrders = $this->wooCommerceService->getAllOrders();
    
            // Log para verificar os pedidos retornados
            Log::info('All Orders:', ['orders' => $allOrders]);
    
            // Verificar a existência do e-mail de cobrança
            $orders = array_filter($allOrders, function ($order) use ($email) {
                if (isset($order['billing']['email'])) {
                    Log::info('Order Billing Email:', ['email' => $order['billing']['email']]);
                    return $order['billing']['email'] === $email;
                }
                return false;
            });
    
            // Log para verificar os pedidos filtrados
            Log::info('Filtered Orders:', ['orders' => $orders]);
    
            // Passar os pedidos filtrados para a view
            return view('orders.index', ['orders' => $orders]);
        }        
    }

    public function show($id)
    {
        // Obter detalhes do pedido usando o serviço WooCommerce
        $order = $this->wooCommerceService->get("orders/{$id}");

        return view('orders.order-details', [
            'order' => $order
        ]);
    }
}
