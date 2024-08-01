<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        $productList = products::all();
        $productList = products::orderBy('name', 'asc')->get();
        $productList = products::orderBy('price', 'asc')->get();



        return view("product-list", ["listTitle" => $productList]);
    }

    public function show(int $id)
    {
        $product = products::where('id', $id)->first();
        return view("product-details", ["id" => $id], ["product" => $product]);
    }//
}
