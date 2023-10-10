<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavigationController extends Controller
{
    public function index() {
        $categories = DB::table('product_categories')->get();
        $latestFashion = DB::table('products')->where('category_id', '=', 1)->get();
        $latestElectronic = DB::table('products')->where('category_id', '=', 2)->get();
        $latestJewellery = DB::table('products')->where('category_id', '=', 3)->get();
        $cartItemsCount = 0;
        if (session()->has('cart_id')) {
            $cartId = session('cart_id');
            $cartItemsCount = CartItem::where('cart_id', $cartId)->sum('quantity');
        }
        return view('pages/home', [
            'categories' => $categories,
            'latestFashion' => $latestFashion,
            'latestElectronic' => $latestElectronic,
            'latestJewellery' => $latestJewellery,
            'cartItemsCount' => $cartItemsCount
        ]);
    }
}
