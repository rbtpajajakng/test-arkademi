<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getAllProducts() {
        $allProducts = Product::all();

        return response() -> json(['error' => false, 'data' => $allProducts]);
    }
}
