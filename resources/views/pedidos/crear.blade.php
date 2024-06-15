<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pedidos - Crear</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Domine:wght@400..700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Outfit:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Signika+Negative:wght@300..700&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <style>
        body {
            background-image: url("https://img.freepik.com/free-vector/copy-space-wavy-white-background-layers_23-2148845469.jpg?t=st=1718354253~exp=1718357853~hmac=5f6a9b0b62afd684f1db0ebaddb260aa7d22cd4d57c43f464fd7be8aebc870b7&w=1380"); 
            color: #4F0341;
            background-size: cover;
            background-position: center;
            font-family: 'Signika Negative', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 600px;  
        }
        .card {
            border: 1px solid #4F0341;
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
            color: #4F0341;
        }
        .card-body h1 {
            font-size: 2rem;
            font-weight: lighter;
            color: #4F0341;
        }
        .form-group label {
            font-weight: bold;
            color: #4F0341;
            font-size: 2.1vh;
        }
        .form-group input, .form-select {
            height: 55px;
            font-size: 2vh;
            font-weight: lighter;
            outline: none !important;
            background-color: #4F034115;
            color: #4F0341;
        }
        .form-group > .btn {
            background-color: #4F0341;
            color: white;
        }
        .btn:hover {
            border: #4F0341;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Registrar Pedido</h1>
                    <form class="form" action="{{ route('pedidos.store')}}" method="post">
                        <!-- @csrf -->
                        <div class="form-group mb-4">
                            <label class="mb-2 label-input" for="cliente_id">Cliente ID*</label>
                            <input type="text" name="cliente_id" class="form-control" placeholder="ID del cliente">
                        </div>
                        <div class="form-group mb-4">
                            <label class="mb-2 label-input" for="producto_id">Producto ID*</label>
                            <input type="text" name="producto_id" class="form-control" placeholder="ID del producto">
                        </div>
                        <div class="form-group mb-4">
                            <label class="mb-2 label-input" for="cantidad">Cantidad*</label>
                            <input type="number" name="cantidad" class="form-control" placeholder="Cantidad del pedido">
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 label-input" for="fecha_pedido">Fecha Pedido*</label>
                                    <input type="date" name="fecha_pedido" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 label-input" for="fecha_entrega">Fecha Entrega*</label>
                                    <input type="date" name="fecha_entrega" class="form-control">
                                </div>
                            </div>
                        </div>
                        <p class="subtitle mb-4">Por favor, llenar con los detalles del pedido.</p>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg col-md-6">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
