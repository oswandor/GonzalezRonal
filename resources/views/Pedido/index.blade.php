<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Of Clients</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>List Pedidos</h2>
                </div>
                <div class="pull-right mb-2">
                 <a class="btn btn-success" href="{{ route('pedidos.create') }}"> Create Pedidos</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
        <thead>
    <tr>
        <th>S.No</th>
        <th>Fecha Pedido</th>
        <th>Fecha Entrega</th> 
        <th>Observacion </th> 
        <th> relacion cliente </th>
        <th>bonotes</th>
     </tr>
</thead>
<tbody>
    @foreach ($pedidos as $pedido)
    <tr>
        <td>{{ $pedido->id_pedido }}</td>
        <td>{{ $pedido->fecha_pedido }}</td>
        <td>{{ $pedido->fecha_entrega_pedido }}</td>
        <td>{{ $pedido->observaciones_pedido }}</td>
        <td>{{  $pedido->fk_id_cliente }}</td>
        <td>
                            <form action="{{ route('pedidos.destroy',$pedido->id_pedido) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('pedidos.edit',$pedido->id_pedido) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
 </td>
    </tr>
    @endforeach
</tbody>

        </table>
      
    </div>
</body>
</html>