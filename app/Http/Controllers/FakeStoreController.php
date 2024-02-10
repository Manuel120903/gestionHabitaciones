<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class FakeStoreController extends Controller
{
    public function index()
    {
        $products = Http::get('https://fakestoreapi.com/products')->json();

        return view('products.index', compact('products'));
    }

    public function getProducts()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://fakestoreapi.com/products');
        $products = json_decode($response->getBody()->getContents());

        return view('clientView.productos', compact('products'));
    }

    public function inicio()
    {
        return view('clientView.productos');
    }

    public function addToCart(Request $request, $id)
    {
        $product = Http::get("https://fakestoreapi.com/products/{$id}")->json();

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product['title'],
                "quantity" => 1,
                "price" => $product['price'],
                "image" => $product['image']
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Producto añadido al carrito correctamente.');
    }

    public function cart()
    {
        return view('clientView.carrito');
    }
    public function updateCart(Request $request)
    {
        if ($request->quantities) {
            foreach ($request->quantities as $id => $quantity) {
                if ($quantity < 1) {
                    continue; 
                }

                $cart = session()->get('cart');

                if (isset($cart[$id])) {
                    $cart[$id]['quantity'] = $quantity;
                }

                session()->put('cart', $cart);
            }
        }

        return redirect()->route('cart')->with('success', 'Carrito actualizado correctamente.');
    }
}
