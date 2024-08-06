<?php

namespace App\Http\Controllers;
use App\Models\Order;


use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $order = Order::all();
        dd($order);
        //faire un dum ou dd de la table category return la view correspondante
    }
}
