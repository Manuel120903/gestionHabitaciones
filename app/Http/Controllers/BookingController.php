<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view("pages.rubikcode.register");
    }
    public function store (BookingController $request)
    {
        $validated = $request->validated();
        return $validated;
    }
}
