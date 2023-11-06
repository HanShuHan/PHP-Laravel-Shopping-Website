<?php

//Written by David Currey

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Get the search query from the request
        $query = $request->input('query');

        // Search the products table for matching items and paginate the results
        $products = Product::where('name', 'like', '%' . $query . '%')->paginate(12);

        // Return the search results view with the products
        return view('pages.search-results', compact('products'));
    }
}
