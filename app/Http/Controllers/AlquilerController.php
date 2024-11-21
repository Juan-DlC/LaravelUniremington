<?php

namespace App\Http\Controllers;

use App\Models\alquiler;
use Illuminate\Http\Request;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alquilers=alquiler::all(); 
        return view('alquiler.alquiler',compact('alquilers')); //Ruta despues de VIEWS compacto la tabla productos
    }

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(alquiler $alquiler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alquiler $alquiler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, alquiler $alquiler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(alquiler $alquiler)
    {
        //
    }
}
