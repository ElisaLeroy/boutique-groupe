<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function index()
    {
        return view('backoffice',["products" => Products::all()]);
    }
    public function edit($id)
    {
        return view('product-edit',["datas" => Products::where('id',$id)->get()]);
    }

    public function create()
    {
    }

    public function update(Request $request, $id)
    {
        //modifie la data


        //renvoie la page avec update

    }
    public function destroy($id)
    {
    }
}
