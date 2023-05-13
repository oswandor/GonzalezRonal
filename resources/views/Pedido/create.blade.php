<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Company Form - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Pedido</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('pedidos.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fecha de pedido:</strong>
                        <input type="datetime-local" name="FechaEnlaQueseRealiza" class="form-control" placeholder="Nombre">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fecha Entrega:</strong>
                        <input type="datetime-local" name="FechaDeEntrega" class="form-control" placeholder="Apellido">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Observacion de pedido:</strong>
                        <input type="text" name="observacionDelpedido" class="form-control" placeholder="Observaciones de pedidos">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                
                <!-- aqui se hace la logica para retornar la lista de nombres de los clientes y como valor envia el id del cliente  -->
                <select class="form-select" aria-label="Default select example"  name="ClienteQuehacePedido">
                @foreach ($listaClientes as $cliente)
                <option value="{{ $cliente->id_cliente }}">{{ $cliente->nombre_cliente }}</option>
                @endforeach 
                </select>
              

                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>