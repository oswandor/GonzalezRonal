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
                    <h2>List articulos</h2>
                </div>
                <div class="pull-right mb-2">
                 <a class="btn btn-success" href="{{ route('articulos.create') }}"> Create articulos</a>
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
        <th>Nombre articulo</th>
        <th>Descripcion Articulo</th> 
        <th>Cantidad Inventario</th> 
        <th>Precio Articulo</th>
        <th>bonotes</th>
     </tr>
</thead>
<tbody>
    @foreach ($articulos as $articulo)
    <tr>
        <td>{{ $articulo->id_articulo }}</td>
        <td>{{ $articulo->nombre_articulo }}</td>
        <td>{{ $articulo->descripcion_articulo }}</td>
        <td>{{ $articulo->cantidad_inventario_articulo }}</td>
        <td>{{  $articulo->precio_articulo }}</td>
        <td>
                            <form action="{{ route('articulos.destroy',$articulo->id_articulo) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('articulos.edit',$articulo->id_articulo) }}">Edit</a>
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