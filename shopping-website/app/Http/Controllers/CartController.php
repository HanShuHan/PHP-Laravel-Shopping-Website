<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function showCart() {
        $cartId = Session::get('cart_id');
        $cartItems = CartItem::where('cart_id', $cartId)->with('product')->get();

        $total = 0;
        foreach ($cartItems as $item) {
            $itemPrice = DB::table('products')->where('id', '=', $item->product_id)->value('price');
            $total += $itemPrice * $item->quantity;
        }

        return view('pages/cart', [
            'cartItems' => $cartItems,
            'total' => $total
        ]);
    }

    public function removeFromCart($item_id) {
        $cartItem = CartItem::where('id', $item_id)->first();
        if ($cartItem) {
            $cartItem->delete();
            return redirect()->back()->with('success', 'Item removed from cart.');
        }

        return redirect()->back()->with('error', 'Item not found');
    }

    public function clearCart() {
        $cartId = Session::get('cart_id');
        $cartItems = CartItem::where('cart_id', $cartId);

        if($cartItems->count() > 0) {
            $cartItems->delete();
            return redirect()->back()->with('success', 'All items removed from cart.');
        }

        return redirect()->back()->with('info', 'Your cart is already empty.');
    }
}
