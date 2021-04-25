<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Productos = Producto::all();
        return view('Productos.index')->with('Productos', $Productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Productos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'precio' => 'required',
            'costo' => 'required',
            'existencia' =>'required'
        ]);
        
        Producto::create($data);

        return redirect('/Productos')->with('success', 'Cliente creado correctamente.');    
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
        $Productos = Producto::findOrFail($id);
        return view('Productos.update')->with('Productos', $Productos);
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
        $data = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'costo' => 'required',
            'existencia' =>'required'
        ]);
        
        Producto::whereId($id)->update($data);

        return redirect('/Productos')->with('success', 'Producto modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Productos = Producto::findOrFail($id);
        $Productos->delete();

        return redirect('/Productos')->with('success', 'Producto eliminado correctamente.');;
    }
}
