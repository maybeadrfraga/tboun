<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WooCommerceService
{
    protected $url;
    protected $consumerKey;
    protected $consumerSecret;

    public function __construct()
    {
        $this->url = config('woocommerce.url');
        $this->consumerKey = config('woocommerce.consumer_key');
        $this->consumerSecret = config('woocommerce.consumer_secret');

        Log::info('WooCommerce Config', [
            'url' => $this->url,
            'consumer_key' => $this->consumerKey,
            'consumer_secret' => $this->consumerSecret,
        ]);
    }

    public function get($endpoint, $params = [])
    {
        $response = Http::withBasicAuth($this->consumerKey, $this->consumerSecret)
            ->get("{$this->url}$endpoint", $params);

        return $response->json();
    }

    public function post($endpoint, $data = [])
    {
        $response = Http::withBasicAuth($this->consumerKey, $this->consumerSecret)
            ->post($this->url . $endpoint, $data);

        return $response->json();
    }

    public function put($endpoint, $data = [])
    {
        $response = Http::withBasicAuth($this->consumerKey, $this->consumerSecret)
            ->put($this->url . $endpoint, $data);

        return $response->json();
    }

    public function delete($endpoint, $params = [])
    {
        $response = Http::withBasicAuth($this->consumerKey, $this->consumerSecret)
            ->delete($this->url . $endpoint, $params);

        return $response->json();
    }

    public function getOrders($params = [])
    {
        return $this->get('orders', $params);
    }

    public function getProducts($params = [])
    {
        return $this->get('products', $params);
    }

    public function getProduct($productId)
    {
        return $this->get("products/{$productId}");
    }

    public function getAllOrders()
    {
        $allOrders = [];
        $page = 1;

        do {
            $params = ['page' => $page, 'per_page' => 100];
            $response = $this->get('orders', $params);
            $allOrders = array_merge($allOrders, $response);
            $page++;
        } while (count($response) === 100);

        return $allOrders;
    }
}
