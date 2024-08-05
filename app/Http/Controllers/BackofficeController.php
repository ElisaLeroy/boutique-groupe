<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function index()
    {
        return view('backoffice', ["products" => Products::all()]);
    }

    public function edit($id)
    {
        return view('product-edit', ["datas" => Products::where('id', $id)->get()]);
    }

    public function create(Request $request)
    {
        Products::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'weight' => $request->input('weight'),
            'quantity' => $request->input('quantity'),
            'availability' => $request->input('availability'),
            'category' => $request->input('category'),
            'taste' => $request->input('taste')
        ]);
        return view('product-create');
    }

    public function store(Request $request){
        Products::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'weight' => $request->input('weight'),
            'quantity' => $request->input('quantity'),
            'availability' => $request->input('availability'),
            'category' => $request->input('category'),
            'taste' => $request->input('taste')
        ]);
        return redirect()->route('backoffice');
    }
    public function update(Request $request, $id)
    {
        // Récupération du produit
        $product = Products::find($id);
        if (!$product) {
            return redirect()->back()->withErrors(['Product not found.']);
        }

        // Mise à jour des champs
        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'weight' => $request->input('weight'),
            'quantity' => $request->input('quantity'),
            'availability' => $request->input('availability'),
            'category' => $request->input('category'),
            'taste' => $request->input('taste')
        ]);

        // Redirection avec message de succès
        return redirect()->route('edit', ['id' => $id])->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        Products::find($id)->delete();
        return redirect()->route('backoffice');
    }
}
