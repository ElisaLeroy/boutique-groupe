<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class ProductController extends Controller
{

    public function index()
    {
        $products = Products::all();

        return view("product-list", ["catalogue" => $products]);
    }

    public function show(int $id)
    {
        $products = Products::all();

        return view("product-details", ["id" => $id, "catalogue" => $products ]);
    }
    
}
