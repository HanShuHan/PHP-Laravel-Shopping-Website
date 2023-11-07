<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function listItems($categoryName) {
        $categories = DB::table('product_categories')->get();
        $cartItemsCount = 0;
        if (session()->has('cart_id')) {
            $cartId = session('cart_id');
            $cartItemsCount = CartItem::where('cart_id', $cartId)->sum('quantity');
        }
        if($categoryName === 'all') {
            $products = DB::table('products')->paginate(8);
        } else {
            $categoryId = DB::table('product_categories')->where('name', $categoryName)->value('id');
            $products = DB::table('products')->where('category_id', $categoryId)->paginate(8);
        }

        return view('pages/product-listing', [
            'categories' => $categories,
            'products' => $products,
            'cartItemsCount' => $cartItemsCount
        ]);
    }

    public function index($product_id) {
        $product = DB::table('products')->where('id', '=', $product_id)->first();
        $categories = DB::table('product_categories')->get();
        $category = DB::table('product_categories')->where('id', '=', $product->category_id)->value('name');
        $cartItemsCount = 0;
        if (session()->has('cart_id')) {
            $cartId = session('cart_id');
            $cartItemsCount = CartItem::where('cart_id', $cartId)->sum('quantity');
        }
        return view('pages/product', [
            'product' => $product,
            'categories' => $categories,
            'category' => $category,
            'cartItemsCount' => $cartItemsCount
        ]);
    }

    public function addToCart($product_id) {
        $cartId = Session::get('cart_id');
        if(!$cartId) {
            $cart = new Cart;
            $cart->id = fake()->uuid();
            $cart->user_id = Auth::id();
            $cart->total_cost = 0;
            $cart->save();
            Session::put('cart_id', $cart->id);
        }
        else {
            $cart = Cart::find($cartId);
        }

        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $product_id)
            ->first();

        if($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        }
        else {
            $cartItem = new CartItem;
            $cartItem->id = fake()->uuid();
            $cartItem->cart_id = $cart->id;
            $cartItem->product_id = $product_id;
            $cartItem->quantity = 1;
            $cartItem->save();
        }

        return redirect()->route('product.index', $product_id)->with('success', 'Added to cart succesfully');
    }
}