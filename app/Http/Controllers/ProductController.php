<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $products = DB::select ('select * from products');


        return view("product-list", ["catalogue" => $products]);
    }

    public function show(int $id)
    {
        $products = DB::select ('select * from products');

        return view("product-details", ["id" => $id, "catalogue" => $products ]);
    }


}
