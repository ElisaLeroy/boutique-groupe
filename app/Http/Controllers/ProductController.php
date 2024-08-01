<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $data=DB::select('select * from products');
        return view("product-list", ["products" => $data]);
    }

    public function show(int $id)
    {
        $datas=DB::select('select * from products WHERE id = :id', ['id' => $id]);
        return view("product-details", ["datas" => $datas]);
    }//
}
