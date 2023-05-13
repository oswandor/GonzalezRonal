<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\DetallePedidoArticulo;
use App\Models\PruebaModels;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $client = Cliente::all(); 

       return response()->view('Cliente.index' , ['clientes'=> $client ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return response()->view('Cliente.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) : Response
    {   

        //dd($request->all());

        
        $request->validate([
            'Nombrecliente' => 'required',
            'apelldiCliente' => 'required',
            'time' => 'required'
        ]);

        $cliente = new Cliente([
            'nombre_cliente' => $request->input('Nombrecliente'),
            'apellido_cliente' => $request->input('apelldiCliente'),
            'fecha_nacimiento_cliente' => $request->input('time')
        ]);

        $cliente->save();



        return redirect()->route('clientes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente) : View 
    {
        // return view  show  
        return view('Cliente.show',compact('cliente'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente) : View 
    {
        
        return view('Cliente.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Cliente $cliente) : Response 
    {   
       
        $cliente = Cliente::find($cliente->id_cliente);
         
        $cliente->update([
            'nombre_cliente' => $request->input('Nombrecliente'),
            'apellido_cliente' => $request->input('apelldiCliente'),
            'fecha_nacimiento_cliente' => $request->input('time')
        ]);


        return redirect()->route('clientes.index')->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente) : Response
    {   
        $cliente = Cliente::findOrFail($cliente->id_cliente);

        DB::beginTransaction();
    
        try {
            // Eliminar los registros relacionados en tb_detalle_pedido_articulos
            $pedidosIds = $cliente->pedidos()->pluck('id_pedido');
            DetallePedidoArticulo::whereIn('fk_id_pedido', $pedidosIds)->delete();
            
            // Eliminar los registros correspondientes en tb_pedidos
            $cliente->pedidos()->delete();
            
            // Eliminar el registro del cliente en tb_clientes
            $cliente->delete();
            
            DB::commit();
            
            return redirect()->route('clientes.index')->with('success', 'El cliente ha sido eliminado exitosamente.');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('clientes.index')->with('error', 'Ocurrió un error al eliminar el cliente.');
        }
     
    }
}
