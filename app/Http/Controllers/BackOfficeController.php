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

    public function create()
    {
        return view('product-add');
    }

    public function edit($id)
    {
        $product = products::find($id);

        return view('product-edition', compact('product'));
    }

    public function update(Request $request, $id)
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


        return redirect("/backoffice");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ref' => 'required|string|max:255',
            'availability' => 'required|string',
            'name' => 'required|string|max:255',
            'image_url' => 'nullable|string', // Optional field
            'weight' => 'required|numeric',
            'quantity' => 'required|integer',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'origine' => 'nullable|string', // Optional field
            'description' => 'nullable|string', // Optional field
        ]);

        $product = products::create($validatedData);

        return redirect()->route('product.show', ['id' => $product->id])
            ->with('success', 'Product created successfully.');
    }

    public
    function destroy($id)
    {
        $product = products::find($id);
        $product->delete();
        return redirect('/backoffice')->with('success', 'Product deleted successfully.');
    }
}
