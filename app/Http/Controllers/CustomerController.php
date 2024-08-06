<?php

namespace App\Http\Controllers;
use App\Models\Customer;


use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::all();
        dd($customer);
        //faire un dum ou dd de la table category return la view correspondante
    }
}
