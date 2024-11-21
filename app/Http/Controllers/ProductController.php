<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Redirect;
//use PDF;

class   ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::simplePaginate(5); /**Consullta ORM (O es como una sentencia sql) */

        return view('products.index',compact('products')); //Ruta despues de VIEWS compacto la tabla productos
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->code =$request->code;
        $product->name =$request->name;
        $product->price =$request->price;
        $product->ammount =$request->ammount;
        $product->supplier =$request->supplier;
        $product->Description =$request->Description;
        $product->save();
        return Redirect::route('products.index');
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
        return view('products.edit', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Actualizar los campos del producto con los datos recibidos
        $product->code = $request->code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->ammount = $request->ammount;
        $product->supplier = $request->supplier;
        $product->Description = $request->Description;

        // Guardar los cambios en la base de datos
        $product->save();

        // Redirigir de vuelta al índice de productos
        return Redirect::route('products.index')->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
       $product->delete();
       return Redirect::route('products.index'); 
    }

    public function generarPDF(){
        $products = Product::all();

        $pdf = PDF::loadView('products.pdf', compact('products'));

        return $pdf->stream('ExpPDF.pdf');//
    }

    public function gnrPDF($id){

        $pdf = PDF::loadView('products.pdf', compact('products'));

        return $pdf->stream('ExpPDF.pdf');//
    }
}
