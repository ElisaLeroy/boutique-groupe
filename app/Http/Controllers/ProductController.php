<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {

//        Accéder à tous les produits

        $products = Product::all();

        //Trier par prix croissant
        //$products=Products::orderBy('price', 'asc')->get();

        //Trier par ordre alphabétique des noms
        //$products=Products::orderBy('name', 'asc')->get();


        return view("product-list", ["catalogue" => $products]);
    }

    public function show(int $id)
    {
        $products = Product::findOrFail($id);

        return view("product-details", ["id" => $id, "catalogue" => $products ]);
    }
}
