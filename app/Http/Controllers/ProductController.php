<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => true,
            'message' => 'Products API working'
        ]);
    }
}