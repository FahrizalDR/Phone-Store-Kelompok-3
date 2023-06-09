<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Get the authenticated user's nik_pembeli
        $userNik = Auth::user()->nik_pembeli;

        // Check if the item already exists in the cart for the user
        $cartItem = cart::where('nik_pembeli', $userNik)
                        ->where('product_id', $productId)
                        ->first();

        if ($cartItem) {
            // If the item already exists, increase the quantity
            $cartItem->update(['quantity' => $cartItem->quantity + $quantity]);
        } else {
            // If the item doesn't exist, create a new cart item
            Cart::create([
                'nik_pembeli' => $userNik,
                'product_id' => $productId,
                'quantity' => $quantity,
            ]);
        }

        // Redirect the user to the cart page or any other page you prefer
        return redirect('/cart')->with('success', 'Item added to cart successfully.');
    }

}