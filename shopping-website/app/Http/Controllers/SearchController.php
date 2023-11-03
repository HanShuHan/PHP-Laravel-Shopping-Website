<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Get the search query from the request
        $query = $request->input('query');

        // Search the products table for a matching item
        $product = Product::where('name', 'like', '%' . $query . '%')->first();

        // Check if a product was found
        if ($product) {
            // Redirect to the product page with the product's id
            return redirect('/product/' . $product->id);
        } else {
            // No product found, handle accordingly, maybe redirect back with a message
            return redirect('/search')->with('error', 'No products found.');
        }
    }
}
