<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DependencyInjection\RemoveEmptyControllerArgumentLocatorsPass;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPedidos = Pedido::all(); 
        
        return response()->view('Pedido.index', ['pedidos' => $allPedidos] ); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // pasar todos los clientes  
        $listOfClientes = Cliente::all(); 
        
        return response()->view('Pedido.create' ,['listaClientes' => $listOfClientes]);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) : Response
    {
        $request->validate([
            'FechaEnlaQueseRealiza' => 'required',
            'FechaDeEntrega' => 'required',
            'observacionDelpedido' => 'required',
            'ClienteQuehacePedido' =>  'required' , 
        ]);
        

        $pedido= new Pedido([
            'fecha_pedido' => $request->input('FechaEnlaQueseRealiza'),
            'fecha_entrega_pedido' => $request->input('FechaDeEntrega'),
            'observaciones_pedido' => $request->input('observacionDelpedido'),
            'fk_id_cliente' => $request->input('ClienteQuehacePedido')
        ]);
 
        $pedido->save() ; 

        
        return redirect()->route('clientes.index')->with('success','Pedido Has Been updated successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {   
          // pasar todos los clientes  
          $listOfClientes = Cliente::all(); 
        
          return response()->view('Pedido.edit', [
            'pedido' => $pedido,
            'listOfClientes' => $listOfClientes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)  :Response
     {
        $pedido = Pedido::find($pedido->id_pedido);
         
        $pedido->update([
            
            'fecha_pedido' => $request->input('FechaEnlaQueseRealiza'),
            'fecha_entrega_pedido' => $request->input('FechaDeEntrega'),
            'observaciones_pedido' => $request->input('observacionDelpedido'),
            'fk_id_cliente' => $request->input('ClienteQuehacePedido')
        ]);


        return redirect()->route('pedidos.index')->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido) :Response 
    {
        // Eliminar los registros relacionados de tb_detalle_pedido_articulos
         DB::table('tb_detalle_pedido_articulos')->where('fk_id_pedido', $pedido->id_pedido)->delete();

        // Eliminar el pedido de tb_pedidos
        $pedido->delete();


        return redirect()->route('pedidos.index')->with('success', 'El cliente ha sido eliminado exitosamente.');

    }
}
