<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index()
    {
        $productList = products::all();
        return view("backoffice", ["productList" => $productList]);
    }
    public function show($id)
    {
        $product = products::find($id);

        return route('backoffice.update', $id);
    }
    public function create()
    {
//        $addProduct = products::create()

    }

    public function edit($id)
    {
        $product = products::find($id);

        return view('product-edition', compact('product'));
    }

    public function store(Request $request, $id)
    {
        $product = products::find($id);

        $product->update([
            'ref' => $request->input('ref'),
            'availability' => $request->input('availability'),
            'name' => $request->input('name'),
            'image_url' => $request->input('image_url'),
            'weight' => $request->input('weight'),
            'quantity' => $request->input('quantity'),
            'category' => $request->input('category'),
            'price' => $request->input('price'),
            'origine' => $request->input('origine'),
            'description' => $request->input('description'),
        ]);


        return redirect()->route('products.show', ['id' => $id]);
    }
}
