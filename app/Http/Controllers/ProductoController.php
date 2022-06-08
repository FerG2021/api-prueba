<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // obtener los productos
        $productos = Producto::all();
        return $productos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // guardar un producto luego de crearlo
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->unidadMedida = $request->unidadMedida;

        $producto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // actualizar un producto
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->nombre;
        $producto->unidadMedida = $request->unidadMedida;

        $producto->save();

        return $producto;
    }

    // funcion para traer los datos de un producto
    public function obtenerDatos($id){
        $producto = Producto::findOrFail($id)->get(); 
        
        // $producto = json_encode($producto);

        // return $producto;

        return response()->json(['success' => true, 'producto' => $producto], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // eliminar un producto
        $producto = Producto::destroy($request->id);
        return $producto;
    }
}
