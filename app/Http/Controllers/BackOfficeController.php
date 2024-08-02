<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index(){

        $products = Product::all();

        return view('backoffice', ["catalogue" => $products]);
    }

    public function createPage(){
        $products = Product::all();
        return view("result-add-product", ["catalogue" => $products]);
    }
}
