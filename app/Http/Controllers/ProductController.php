<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //public $productList = ["A", "B", "C","A", "B", "C"];


    public function index()
    {
        $products = DB::select ('select * from products');

        return view("product-list", ["catalogue" => $products]);
    }

    public function show(int $id)
    {
        return view("product-details", ["id" => $id]);
    }//
}
