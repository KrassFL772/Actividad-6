<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador_Productos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Vista_Productos()
    {
         return view ('Productos_Vista.Vista');
    }
   
    public function Editar_Productos()
    {
         return view ('Productos_Vista.Editar');
    }
   
    public function Crear_Productos()
    {
         return view ('Productos_Vista.Crear');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
