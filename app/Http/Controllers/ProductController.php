<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Display a listing of the products.
    public function index()
    {
        $products = Product::all();

        if ($products->isEmpty()) {
            $products = collect(); 
        }

        return view('dashboard.products.index', compact('products'));
    }

    // Show the form for creating a new product.
    public function create()
    {
        return view('products.create');
    }

    // Store a newly created product in storage.
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);
            
            Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'category' => $request->category,
                'stock' => $request->stock,
                'image' => $imageName,
            ]);
        }


        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // Display the specified product.
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Show the form for editing the specified product.
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Update the specified product in storage.
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'stock' => 'required|integer',
        ]);

        // Find the product and update its details
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'stock' => $request->stock,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // Remove the specified product from storage.
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
