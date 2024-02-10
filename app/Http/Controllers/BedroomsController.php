<?php

namespace App\Http\Controllers;
use App\Http\Requests\Alcafi\StoreCustomerRequest;
use Illuminate\Contracts\Cache\Store;
use App\Models\bedrooms;
use App\Models\category;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BedroomsController extends Controller
{
    public $endpoint = "http://127.0.0.1:8001/api/bedrooms";

    public function index()
    {
        $response = Http::withHeaders(['Authorization'=>'Bearer '.Session::get('token')])->get($this->endpoint);
        $json = json_decode($response->body());
        
        return view("pages.dashboard.bedrooms.register")->with('bedrooms', $json->bedrooms);
    }

    public function store (Request $request)
    {
        
        $response = Http::withHeaders(['Authorization'=>'Bearer '.Session::get('token')])->post($this->endpoint, [
            'name' => $request->name,
            'zone' => $request->zone,
            'number' => $request->number,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $request->image,
            'image2' => $request->image2,
            'image3' => $request->image3,
        ]);

        return redirect()->route("bedrooms.index");
    }
}
