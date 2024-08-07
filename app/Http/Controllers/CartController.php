<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
    }

    public function store(Request $request)
    {
        $quantities = $request->input('quantity', []);

        foreach ($quantities as $productId => $quantity) {
            // Assuming you have a method to add products to the cart
            $this->addProductToCart($productId, $quantity);
        }

        return redirect()->route('cart.index')->with('success', 'Product(s) added to cart successfully!');
    }

    protected function addProductToCart(Cart $cart, $productId, $quantity)
    {
        $cartItem = $cart->items()->where('product_id', $productId)->first();

        if ($cartItem) {
            // Update quantity if item already exists
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // Create new cart item
            $cart->items()->create([
                'product_id' => $productId,
                'quantity' => $quantity,
            ]);
        }
    }

}

