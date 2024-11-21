<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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

        return response()->json(['data' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->code = $request->code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->ammount = $request->ammount;
        $product->supplier = $request->supplier;
        $product->Description = $request->Description;
        $product->save();

        return response()->json(['data'=>$product]); //Que me diga que guardo
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
       if (!$product) {
            return response()->json(['massage' => 'Producto no encontrado'],404);
       }else {
        return response()->json(['data'=>$product]);
       }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product) //Trido todo lo de la base de datos para actualizar
    {
        $product->code = $request->code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->ammount = $request->ammount;
        $product->supplier = $request->supplier;
        $product->Description = $request->Description;
        $product->save();

        return response()->json(['data'=>$product]); //Que me diga que guardo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json($product);
    }
}