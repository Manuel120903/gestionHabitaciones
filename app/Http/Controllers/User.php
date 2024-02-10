<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
class User extends Controller
{
    public $endpoint = "http://127.0.0.1:8001/api/users";

    public function index()
    {           
        $response = Http::withHeaders(['Authorization'=>'Bearer '.Session::get('token')])->get($this->endpoint);
        $json = json_decode($response->body());
        
        return view("pages.dashboard.users.register")->with('users', $json->users);
    }

    public function store (Request $request)
    {
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . Session::get('token'),
            'Accept' => 'application/json',
            // Asume que 'token' es el nombre correcto de la sesión para el token
        ])->post($this->endpoint, [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'role' => $request->role,
            'image' => $request->image,
        ]);
        //dd($response->json());
        return redirect()->route("users.index");
    }
}
