<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Productos</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Domine:wght@400..700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Outfit:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Signika+Negative:wght@300..700&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- JQuery and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-wrapper">
        <div class="container">
            <div class="table-responsive">
                <div class="table-wrapper">    
                    <div class="table-title">
                        <div class="row content-title mb-4">
                            <div class="col-md-4">
                                <div class="show-entries">
                                    <a href="/crear" class="btn btn-success btnCreate">
                                        <i class="bi bi-plus-circle-fill me-2"></i>
                                        Agregar Producto
                                    </a>
                                </div>                        
                            </div>
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <h2>Detalles de <b>Productos</b></h2>
                            </div>
                            <div class="col-md-4">
                                <div class="search-box">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                                        <input type="text" class="form-control" placeholder="Buscar&hellip;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="table-container">
                        <table class="table table-bordered rounded">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Descripción</th>
                                    <th class="text-center">Precio de Compra</th>
                                    <th class="text-center">Precio de Venta</th>
                                    <th class="text-center">Cantidad</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($productos as $producto)
                                <tr>
                                    <td>{{$producto->id}}</td>
                                    <td>{{$producto->nombre}}</td>
                                    <td>{{$producto->descripcion}}</td>
                                    <td>${{$producto->precio_compra}}</td>
                                    <td>${{$producto->precio_venta}}</td>
                                    <td>{{$producto->cantidad}}</td>
                                    <td>{{$producto->estado}}</td>
                                    <td>
                                        <a href="{{route('productos.detalles', $producto->id)}}" class="view" title="View" data-toggle="tooltip"><i class="bi bi-eye-fill"></i></a>
                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="bi bi-pencil-fill ms-2 me-2"></i></a>
                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>        
        </div>  
    </div>
</body>
</html>



<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        // Animate select box length
        var searchInput = $(".search-box input");
        var inputGroup = $(".search-box .input-group");
        var boxWidth = inputGroup.width();
        searchInput.focus(function(){
            inputGroup.animate({
                width: "300"
            });
        }).blur(function(){
            inputGroup.animate({
                width: boxWidth
            });
        });
    });
    </script>
