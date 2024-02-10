<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

;

class CartController extends Controller
{
    public function index()
    {
    return view('home');
    }
    
    
    public function store(Request $request)
{
    Cart::add(array(
        'id' => $request->id?$request->id:'1', // inique row ID
        'name' => $request->name?$request->name:'example',
        'price' =>$request->price?$request->price:20.20,
        'quantity' => $request->quantity?$request->quantity:1,
        'attributes' => array(
            'color' => $request->color?$request->color:'green',
            'size' => $request->size?$request->size:'Big',
        )
    ));
    return back();
}
    
    
}
