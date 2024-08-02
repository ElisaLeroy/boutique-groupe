<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class ProductController extends Controller
{

    public function index()
    {
//        $data=DB::select('select * from products');
//        $data=DB::table('products')->get();

        return view("product-list", ["products" => Products::all()]);
    }

    public function sort(string $page = 'name')
    {
//        if ($page == 'name') {
//            return view("product-list", ["products" => Products::orderBy('name', 'asc' , $page)->get()]);
//        }
//        if ($page == 'price') {
//            return view("product-list", ["products" => Products::orderBy('price', 'desc',  $page)->get()]);
//        }
            if ($page != 'name' && $page != 'sort') {
                $page = 'name';
            return view("product-list", ["products" => Products::orderBy($page, 'asc')->get()]);
            }
    }

    public function show(int $id)
    {
//        $datas=DB::select('select * from products WHERE id = :id', ['id' => $id]);
//        $datas=DB::table('products')->where('id', '=', $id)->get();

        return view("product-details", ["datas" => Products::where('id', $id)->get()
        ]);
    }//
}
