<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil produk beserta kategori terkait
        $products = Product::with('category')->latest()->paginate(10);
        return view('products.index', compact('products'));
    }


public function edit($id)
{
    $product = Product::findOrFail($id);
    $categories = Category::all();

    return view('products.update', compact('product', 'categories'));
}
public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $product->update([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'price' => $request->price,
        'stock' => $request->stock,
        'description' => $request->description,
        'status' => $request->status,
    ]);

    return redirect('/products')
        ->with('success', 'Produk berhasil diupdate');
}

public function delete($id)
{
    $product = Product::find($id);

    if ($product) {
        $product->delete();
    }

    return redirect('/products');
}
public function create()
{
    $categories = Category::all();

    return view('products.create', compact('categories'));
}

public function store(Request $request)
{
    Product::create([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'price' => $request->price,
        'stock' => $request->stock,
        'description' => $request->description,
        'status' => (string) $request->status,
    ]);

    return redirect('/products')
        ->with('success', 'Produk berhasil ditambahkan');
}
}