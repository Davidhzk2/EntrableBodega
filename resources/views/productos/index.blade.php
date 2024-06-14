<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Productos</title>
    <link rel="stylesheet" href="../../css/app.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Lista de productos</h1>
            </div>
            <div class="col-md-6">
                <a href="/crear" class="btn btn-success">Agregar Producto</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio compra</th>
                                <th>Precio venta</th>
                                <th>Cantidad</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach($productos as $producto)
                                <tr>
                                    <td>{{$producto->id}}</td>
                                    <td>{{$producto->nombre}}</td>
                                    <td>{{$producto->descripcion}}</td>
                                    <td>{{$producto->precio_compra}}</td>
                                    <td>{{$producto->precio_venta}}</td>
                                    <td>{{$producto->cantidad}}</td>
                                    <td>{{$producto->estado}}</td>
                                    <td><a href="" class="btn btn-sm btn-warning">Detalles</a>
                                    <a class="btn btn-sm btn-primary">Actualizar</a><a class="btn btn-sm btn-danger">Eliminar</a></td>

                                </tr>

                             @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
