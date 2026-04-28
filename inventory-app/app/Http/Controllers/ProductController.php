<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil produk beserta kategori terkait
        $products = \App\Models\Product::with('category')->latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function insert()
{
    \App\Models\Product::create([
        'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
        'name' => 'Produk Baru',
        'price' => 50000,
        'stock' => 10,
        'description' => 'Produk dari insert',
        'status' => 'tersedia'
    ]);

    return redirect('/products');
}

public function update($id)
{
    $product = \App\Models\Product::find($id);

    if ($product) {
        $product->update([
            'name' => 'Produk Diedit',
            'price' => 88888,
            'status' => 'tersedia'
        ]);
    }

    return redirect('/products');
}

public function delete($id)
{
    $product = \App\Models\Product::find($id);

    if ($product) {
        $product->delete();
    }

    return redirect('/products');
}
}