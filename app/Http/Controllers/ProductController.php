<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

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

    public function getProductDetails($id) {
        $productDetails = Product::find($id);

        return response() -> json(['error' => false, 'data' => $productDetails]);
    }

    public function deleteProduct(Request $request) {
        $product = Product::find($request->_product_id);
        $product->delete();

        return response() -> json(['error' => false, 'success' => true]);
    }
}
