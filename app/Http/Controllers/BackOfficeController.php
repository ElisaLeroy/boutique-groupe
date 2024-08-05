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

        return view("result-add-product");
    }

    public function store(Request $request){
        $products = Product::create([
            'title'=>$request->input('title'),
            'name'=>$request->input('name'),
            'imgURL'=>$request->input('imgURL'),
            'weight'=>$request->input('weight'),
            'quantity'=>$request->input('quantity'),
            'category'=>$request->input('category'),
            'price'=>$request->input('price'),
            'description'=>$request->input('description')

        ]);

        return redirect('/backoffice');
    }

    public function delete(Request $request, int $id){
        $productToDelete = Product::findOrFail($id);        //ici on identifie l'id du produit qu'on voudra supprimer ensuite grâce à l'input hidden dont le name es 'id'
        $productToDelete->delete();

        return redirect('/backoffice');
    }
}
