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
        $allProducts = Product::select('_id as _product_id', 'product_name', 'price', 'stock', 'category_id')->get();

        return response() -> json(['error' => false, 'data' => $allProducts]);
    }

    public function getProductDetails($id) {
        $productDetails = Product::select('_id as _product_id', 'product_name', 'price', 'stock', 'category_id')->find($id);

        return response() -> json(['error' => false, 'data' => $productDetails]);
    }

    public function deleteProduct(Request $request) {
        $product = Product::find($request->_product_id);
        $product->delete();

        return response() -> json(['error' => false, 'success' => true]);
    }

    public function addProduct(Request $request) {
        $newProduct = new Product;
        $newProduct->product_name = $request->product_name;
        $newProduct->price = $request->price;
        $newProduct->stock = $request->stock;
        $newProduct->category_id = $request->category_id;
        if ($request->_product_id) {
            $newProduct->_id = $request->_product_id;
        }
        $newProduct->save();

        return response() -> json(['error' => false, 'success' => true]);
    }

    public function updateProduct(Request $request) {
        $product = Product::find($request->_product_id);
        
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;

        $product->save();

        return response() -> json(['error' => false, 'success' => true]);
    }
}
