<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registrar Empleado</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Domine:wght@400..700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Outfit:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Signika+Negative:wght@300..700&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <style>
        body {
            background-image: url("https://img.freepik.com/free-vector/copy-space-wavy-white-background-layers_23-2148845469.jpg?t=st=1718354253~exp=1718357853~hmac=5f6a9b0b62afd684f1db0ebaddb260aa7d22cd4d57c43f464fd7be8aebc870b7&w=1380"); 
            color: #002349;
            background-size: cover;
            background-position: center;
            font-family: 'Signika Negative', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 800px;  
        }
        .card {
            border: 1px solid #002349;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            height: 100%;
            width: 100%;
        }
        .card-body {
            padding: 3rem;
        }
        .subtitle {
            font-size: 1rem;
            font-weight: bolder;
            color: #002349;
        }
        .card-body h1 {
            font-size: 2rem;
            font-weight: lighter;
            color: #002349;
        }
        .form-group label {
            font-weight: bold;
            color: #002349;
            font-size: 2.1vh;
        }
        .form-group input, .form-select {
            height: 55px;
            font-size: 2vh;
            font-weight: lighter;
            outline: none !important;
            background-color: #00234915;
            color: #002349;
        }
        .form-group > .btn {
            background-color: #002349;
            color: white;
        }
        .btn:hover {
            border: #002349;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="row">
            <div class="col-md-8">
                <h1>Detalle del Producto</h1>

            </div>
            <div class="col-md-4">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('productos.index') }}">Productos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detalles producto</li>
                    </ol>
                </nav>
            </div>
        </div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $producto->id }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $producto->nombre }}</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>{{ $producto->descripcion }}</td>
        </tr>
        <tr>
            <th>Precio de Compra</th>
            <td>{{ $producto->precio_compra }}</td>
        </tr>
        <tr>
            <th>Precio de Venta</th>
            <td>{{ $producto->precio_venta }}</td>
        </tr>
        <tr>
            <th>Cantidad</th>
            <td>{{ $producto->cantidad }}</td>
        </tr>
        <tr>
            <th>Estado</th>
            <td>{{ $producto->estado }}</td>
        </tr>
        <tr>
            <th>Fotografía</th>
            <td>
                @if($producto->fotografia)
                    <img src="{{ asset('storage/' . $producto->fotografia) }}" alt="{{ $producto->nombre }}" class="img-fluid">
                @else
                    No hay imagen disponible
                @endif
            </td>
        </tr>
    </table>
    <a href="{{ route('productos.index') }}" class="btn btn-primary">Volver a la lista de productos</a>
</div>

</body>
</html>