<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    private $endpoint = "http://127.0.0.1:8001/api/login";

    public function index()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
       $response = Http::post($this->endpoint, [
            'email' => $request->email,
            'password' => $request->password
       ]);
       $json = json_decode($response->body());
       
       if($json->message == "Unauthorized"){
           return redirect()->route('auth.login')->with('error', 'Credenciales incorrectas');
       }
       
       if($json->message == "Successful"){
           Session::put('token', $json->accessToken);
       }
       
       return redirect()->route('dashboard');
    }
}
