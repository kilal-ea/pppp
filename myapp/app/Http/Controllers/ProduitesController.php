<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitesController extends Controller
{
    public function addproducts(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantityPerCarton' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        // Retrieve existing products from session or initialize an empty array
        $products = $request->session()->get('products', []);

        // Add the new product to the array
        $products[] = $validatedData;

        // Save the updated products array to the session
        $request->session()->put('products', $products);

        // Return a response
        return response()->json(['message' => 'Product added successfully', 'product' => $validatedData], 201);
    }

    public function test(Request $request)
    {
        $products = $request->session()->get('products', []);
        return response()->json(['products' => $products]);
    }
}
