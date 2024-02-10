<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $endpoint = "http://127.0.0.1:8001/api/categories";
    //http://127.0.0.1:8001/api/categories

    public function index()
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Session::get('token')])->get($this->endpoint);
        $json = json_decode($response->body());
        

        return view("pages.dashboard.categories.register")->with('category', $json->categories);
        
    }

    public function store(Request $request)
    {  
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . Session::get('token'),
            'Accept' => 'application/json',
            // Asume que 'token' es el nombre correcto de la sesión para el token
        ])->post($this->endpoint, [
            'name' => $request->name, // Asume que 'name' está disponible en el $request
            'cost' => $request->cost, // Asume que 'zone' es lo que deseas enviar como 'cost'
            'description' => $request->description, // Asume que 'description' está disponible en el $request
        ]);
     //dd($response->json());

        return redirect()->route("category.index");
    }
}
