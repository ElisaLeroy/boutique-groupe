<?php

namespace App\Http\Controllers;

use App\Models\customer;
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

        return view('product-edit', ["product" => Product::findorfail($id)]);
    }

    public function create()
    {

        return view('product-create');
    }

    public function store(Request $request){

        return $this->test($request);
    }
    public function update(Request $request, $id)
    {
        //var errors

        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'numeric|min:0',
        ]);
//        $validatedData = $this->verif($request);
        $product = Product::findOrFail($id);

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
        return redirect()->route('update', ['id' => $id])->with('success', 'Product updated successfully');
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
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function test(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'numeric|min:0',
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

    //Customer part
    public function customer($id)
    {

        return view('customer-edit', ["client" => customer::findorfail($id)]);
    }
    function showcustomer()
    {
        return view('customers', ["client" => customer::all()]);
    }
    function addcustomer(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required|',
            'address' => 'required|max:255',
            'postal_code' => 'required|numeric',
            'city' => 'required|string|max:255',
        ]);

        Customer::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'address' => $request->input('address'),
            'postal_code' => $request->input('postal_code'),
            'city' => $request->input('city'),

        ]);
        return redirect()->route('customers');
    }
    public function updatecustomer(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'postal_code' => 'required|numeric',
            'city' => 'required',
        ]);

        $client = Customer::findOrFail($id);
        $client->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'address' => $request->input('address'),
            'postal_code' => $request->input('postal_code'),
            'city' => $request->input('city'),
        ]);

        return redirect()->route('editcustomer', ['id' => $id])->with('success', 'Customer updated successfully');
    }


}
