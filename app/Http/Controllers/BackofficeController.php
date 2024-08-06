<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function index()
    {
        return view('backoffice', ["products" => Product::all()]);
    }

    public function edit($id)
    {
        return view('product-edit', ["datas" => Product::where('id', $id)->get()]);
    }

    public function create()
    {

        return view('product-create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'numeric'
        ]);

        Product::create([
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
        return redirect()->route('backofficelanding');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'numeric'
        ]);
//        $validatedData = $this->verif($request);
        $product = Product::find($id);// use findOrFail pour skip if
        if (!$product) {
            abort(404);
        }
//        $product->update($validatedData);
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
        return redirect()->route('edit', ['id' => $id])->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('backoffice');
    }

//    public function verif(Request $request)
//    {
//        $validated = $request->validate([
//            'name' => 'required|max:255',
//            'description' => 'nullable',
//            'price' => 'numeric'
//        ]);
//        return $validated;
//    }
}
