<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index()
    {
        $productList = DB::select('select * from products');

        return view("product-list", ["listTitle" => $productList]);
    }

    public function show(int $id)
    {
        $product = DB::select('select * from products where id = ?', [$id]);
        return view("product-details", ["id" => $id], ["product" => $product[0]]);
    }//
}
