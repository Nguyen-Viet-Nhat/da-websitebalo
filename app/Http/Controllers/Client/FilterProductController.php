<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class FilterProductController extends Controller
{
    public function filterProducts(Request $req)
    {
        $categoryId = $req->input('category');

        $categories = Category::all();

        $products = Product::where('category_id', $categoryId)->get();

        $selectedCategory = Category::find($categoryId);

        return view('client.layouts.show-products', compact('products', 'categories', 'selectedCategory'));
    }
}
