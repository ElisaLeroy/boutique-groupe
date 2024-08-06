<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index()
    {

        $products = Product::all();

        return view('backoffice', ["catalogue" => $products]);
    }

    public function validateData(Request $request){
        $request->validate([
            'body' => 'required',
            'publish_at' => 'nullable|date',
            'title' => 'required|max:64',
            'name' => 'required|max:256',
            'imgURL' => 'required|max:256',
            'weight' => 'required|decimal:10.0',
            'quantity' => 'required|int',
            'category' => 'required|int',
            'price' => 'required|decimal:10.0',
            'description' => 'required|max:128',
            'availability' => 'nullable|int'
        ]);
    }

    public function createPage()
    {

        return view("result-add-product");
    }

    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required|max:64',
            'name' => 'required|max:256',
            'imgURL' => 'required|max:256',
            'weight' => 'required|decimal:10.0',
            'quantity' => 'required|int',
            'category' => 'required|int',
            'price' => 'required|decimal:10.0',
            'description' => 'required|max:128',
            'availability' => 'nullable|int'
        ]);


        $products = Product::create([
            'title' => $request->input('title'),
            'name' => $request->input('name'),
            'imgURL' => $request->input('imgURL'),
            'weight' => $request->input('weight'),
            'quantity' => $request->input('quantity'),
            'category' => $request->input('category'),
            'price' => $request->input('price'),
            'description' => $request->input('description')

        ]);

        return redirect('/backoffice');
    }

    public function delete(int $id)
    {
        $productToDelete = Product::findOrFail($id);        //ici on identifie l'id du produit qu'on voudra supprimer ensuite grâce à l'input hidden dont le name es 'id'
        $productToDelete->delete();

        return redirect('/backoffice');
    }


    public function updatePage(int $id)
    {
        $products = Product::findOrFail($id);
        return view("result-update-product", ["id" => $id, "catalogue" => $products]);
    }

    public function update(Request $request, int $id)
    {

        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'imgURL' => 'required',
            'weight' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'price' => 'required',
            'description' => 'required',
            'availability' => 'nullable'
        ]);



        $product = Product::findOrFail($id);


        $data = [
            'title' => $request->input('title'),
            'name' => $request->input('name'),
            'imgURL' => $request->input('imgURL'),
            'weight' => $request->input('weight'),
            'quantity' => $request->input('quantity'),
            'category' => $request->input('category'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'availability' => $request->input('availability')
        ];

        $product->update($data);

        return redirect("/backoffice");

    }
}
