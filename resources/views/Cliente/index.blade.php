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
                    <h2>List Clients</h2>
                </div>
                <div class="pull-right mb-2">
                 <a class="btn btn-success" href="{{ route('clientes.create') }}"> Create Client</a>
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
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha Nacimiento</th>
    </tr>
</thead>
<tbody>
    @foreach ($clientes as $cliente)
    <tr>
        <td>{{ $cliente->id_cliente }}</td>
        <td>{{ $cliente->nombre_cliente }}</td>
        <td>{{ $cliente->apellido_cliente }}</td>
        <td>{{ $cliente->fecha_nacimiento_cliente }}</td>
        <td>
                            <form action="{{ route('clientes.destroy',$cliente->id_cliente) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('clientes.edit',$cliente->id_cliente) }}">Edit</a>
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