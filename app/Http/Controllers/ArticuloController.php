<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articuloslist = Articulo::all(); 

        return response()->view('Articulo.index' , ['articulos'=> $articuloslist ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return response()->view('Articulo.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) :Response
    {
       
        
        $request->validate([
            'nombrearticulo' => 'required',
            'descriparticulo' => 'required',
            'inventarioarticulo' => 'required',
            'precioarticulo' => 'required' 
        ]);



        $articulo = new Articulo([
            'nombre_articulo' => $request->input('nombrearticulo'),
            'descripcion_articulo' => $request->input('descriparticulo'),
            'cantidad_inventario_articulo' => $request->input('inventarioarticulo'),
            'precio_articulo'=> $request->input('precioarticulo') 
        ]) ; 


        if (!$articulo->save()) {
            session()->flash('error', 'No se pudo guardar el artículo.');
            return redirect()->back()->withInput();
        }

        return redirect()->route('articulos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo):View 
    {
        return view('Articulo.edit',compact('articulo')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo) :Response 
    {
        
        $articulo = Articulo::find($articulo->id_articulo);
         
        $articulo->update([
            'nombre_articulo' => $request->input('nombrearticulo'),
            'descripcion_articulo' => $request->input('descriparticulo'),
            'cantidad_inventario_articulo' => $request->input('inventarioarticulo'),
            'precio_articulo'=> $request->input('precioarticulo') 
        ]);


        return redirect()->route('articulos.index')->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo): Response 
    {
        $articulo = Articulo::find($articulo->id_articulo); 
        
        $articulo->delete() ;  

        return redirect()->route('articulos.index')->with('success', 'El articulo ha sido eliminado exitosamente.');
 
    }
}
