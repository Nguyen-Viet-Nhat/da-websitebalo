<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Session;
use App\Models\Product;



class ClienController extends Controller
{
    public function viewClient()
    {
        $categories = Category::all();

        return view('client.layouts.view', compact('products', 'categories'));
    }

    public function viewProducts()
    {
        $categories = Category::all();

        $products = Product::all();

        $listProducts = Product::all();
        return view('client.layouts.show-products', compact('products', 'categories'))->with([
            'products' => $listProducts
        ]);
    }

}
