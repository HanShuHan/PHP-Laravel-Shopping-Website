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
        $highestRate = DB::table('products')->where('rating', '>=', 4)->get();
        $latestDryGoods = DB::table('products')->where('category_id', '=', 2)->get();
        $latestSupplies = DB::table('products')->whereIn('category_id', [3, 4])->get();
        $under20 = DB::table('products')->where('price', '<=', 20)->get();
        $cartItemsCount = 0;
        if (session()->has('cart_id')) {
            $cartId = session('cart_id');
            $cartItemsCount = CartItem::where('cart_id', $cartId)->sum('quantity');
        }
        return view('pages/home', [
            'categories' => $categories,
            'under20' => $under20,
            'highestRated' => $highestRate,
            'latestDryGoods' => $latestDryGoods,
            'latestSupplies' => $latestSupplies,
            'cartItemsCount' => $cartItemsCount
        ]);
    }
}
