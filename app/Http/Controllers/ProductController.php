<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $productList = [1,2,3,4,5,6,7,8,9,10];
    public function index()
    {
        return view("product-list", ["listTitle" => $this->productList]);
    }

    public function show(int $id)
    {
        return view("product-details", ["id" => $id]);
    }//
}
