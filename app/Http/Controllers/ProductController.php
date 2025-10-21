<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product',compact('products'));

        // return response()->json([
        //     'status' => 200,
        //     'success' => true,
        //     'message' => 'Products berhasil diambil',
        //     'data' => $products,
        // ]);
    }

    // public function tambah()
    // {
    //     $post = Post::all();
    //     return view('halaman_post2',compact('post'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new product;
        $product->name="Otak-Otak";
        $product->description="enak";
        $product->price="1000";
        $product->stock="1000";
        $product->save();
        return $product;
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product = product::find(11);
        $product->name="Basreng";
        $product->description="Basreng Enak Dan Gurih";
        $product->price="1000";
        $product->stock="5000";
        $product->save();
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product=Product::find(11);
        $product->delete();
        return $product;
    }
}
