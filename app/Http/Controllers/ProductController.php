<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $productList = Product::all();

        return view("product-list", ["listTitle" => $productList]);

    }

    public function show(int $id)
    {
        $product = Product::where('id', $id)->first();
        return view("product-details", ["id" => $id], ["product" => $product]);

    }

}

