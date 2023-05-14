<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Company Form - Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Pedido</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('pedidos.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('pedidos.update',$pedido->id_pedido ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fecha  :</strong>
                        <input type="datetime-local" name="FechaEnlaQueseRealiza" value="{{ $pedido->fecha_pedido }}" class="form-control">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fecha entrega:</strong>
                        <input type="datetime-local" name="FechaDeEntrega" class="form-control" 
                            value="{{ $pedido->fecha_entrega_pedido }}">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Observaciones:</strong>
                        <input type="text" name="observacionDelpedido" value="{{ $pedido->observaciones_pedido }}" class="form-control"
                            placeholder="Observaciones">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

             <!-- aqui se hace la logica para retornar la lista de nombres de los clientes y como valor envia el id del cliente  -->
            <select class="form-select" aria-label="Default select example"  name="ClienteQuehacePedido">
    
                @foreach ($listOfClientes as $cliente)
                <option value="{{ $cliente->id_cliente }}" {{ $pedido->cliente->id_cliente == $cliente->id_cliente ? 'selected' : '' }}>
                {{ $cliente->nombre_cliente }}
                </option>               
                @endforeach 
                
            </select>
              



                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>