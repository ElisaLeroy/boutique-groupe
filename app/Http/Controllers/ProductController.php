<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class ProductController extends Controller
{

    public function index()
    {
//        Accéder à tous les produits
        $products = Products::all();

        //Trier par prix croissant
        //$products=Products::orderBy('price', 'asc')->get();

        //Trier par ordre alphabétique des noms
        //$products=Products::orderBy('name', 'asc')->get();


        return view("product-list", ["catalogue" => $products]);
    }

    public function show(int $id)
    {
        $products = Products::where('id', $id)->get();

        return view("product-details", ["id" => $id, "catalogue" => $products[0] ]);
    }
}
