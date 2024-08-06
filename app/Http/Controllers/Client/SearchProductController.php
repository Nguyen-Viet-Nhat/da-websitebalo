<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchProductController extends Controller
{
    public function searchProducts(Request $req)
    {
        $query = $req->input('query');

        $products = Product::where('name', 'LIKE', "%{$query}%")->get();

        return view('client.layouts.show-products', compact('products'));
    }
}
