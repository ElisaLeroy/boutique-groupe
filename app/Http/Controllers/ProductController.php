<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
//        $data=DB::select('select * from products where id = :id' ,['id'=>$id]);
//        $data=DB::table('products')->get();

        return view("product-list", ["products" => Product::all()]);
//        return view("product-list", ["products" => $data]);

    }

    public function sort(string $page = 'name')
    {
        if ($page != 'name' && $page != 'price') {
            $page = 'name';
        }
        return view("product-list", ["products" => Product::orderBy($page, 'asc')->get()]);

    }
    public function show($id)
    {
//        $datas=DB::select('select * from products WHERE id = :id', ['id' => $id]);
//        $datas=DB::table('products')->where('id', '=', $id)->get();
        $product = Product::findOrFail($id);
        $category = $product->category;

        return view('product-details', ['product' => $product, 'category' => $category]);
    }
}
