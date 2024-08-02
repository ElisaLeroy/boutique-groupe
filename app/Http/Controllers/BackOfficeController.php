<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index(){
        $productList = products::all();
        return view("backoffice", ["listTitle" => $productList]);
    }
    public function store(Request $request){

        $productList = products::all();
        'id' => $request->input('id');
        'ref' => $request->input('ref');
        'nom' => $request->input('nom');
        'prix' => $request->input('prix');
        'quantite' => $request->input('quantite');

    }
}
