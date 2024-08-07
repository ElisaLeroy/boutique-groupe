<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index()
    {
        $productList = Product::all();
        return view("backoffice", ["productList" => $productList]);
    }

    public function create()
    {
        return view('product-add');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('product-edition', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ref' => 'required|string|max:255',
            'availability' => 'required|boolean|min:0',
            'name' => 'required|string|max:255',
            'image_url' => 'nullable|url',
            'weight' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'category_id' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'origine' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id);

//        if($product == null){
//            abort(404);
//        }

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


        return redirect("/backoffice")->with('success', 'Product updated successfully!');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ref' => 'required|string|max:255',
            'availability' => 'required|string',
            'name' => 'required|string|max:255',
            'image_url' => 'nullable|string',
            'weight' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|string',
            'price' => 'required|numeric|min:0',
            'origine' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $product = Product::create($validatedData);

        return redirect()->route('product.show', ['id' => $product->id])
            ->with('success', 'Product created successfully.');
    }

    public
    function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/backoffice')->with('success', 'Product deleted successfully.');
    }
}
