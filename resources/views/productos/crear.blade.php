<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Productos - Crear</title>
    <link rel="stylesheet" href="../../css/app.css">
</head>
<body>

<div class="container mt-5">
    <div class="d-flex">
        
    </div>
    <h1>Registrar producto</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form" action="{{ route('productos.store')}}" method="post">
                        @csrf
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre producto">
                    </div>
                       <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" placeholder="Descripcion producto">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                        <label for="">Precio venta</label>
                        <input type="text" name="precio_venta" class="form-control" placeholder="Precio venta producto">
                    </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="">Precio_compra</label>
                            <input type="text" name="precio_compra" class="form-control" placeholder="Precio_compra producto">
                        </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control" placeholder="Cantidad">
                        </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="">Estado:</label>
                                <select name="estado" class="form-select">
                                    <option value="disponible">disponible</option>
                                    <option value="no disponible">no disponible</option>
                                </select>
                            </div>
                            </div>
                        </div>
                    <div class="form-group"><br>
                        <button type="submit" class="btn btn-success col-md-6">Registar</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
