<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Clientes</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Domine:wght@400..700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Outfit:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Signika+Negative:wght@300..700&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
                                    <a href="/crear-cliente" class="btn btn-success btnCreate">
                                        <i class="bi bi-plus-circle-fill me-2"></i>
                                        Agregar Cliente
                                    </a>
                                </div>                        
                            </div>
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <h2>Detalles de <b>Clientes</b></h2>
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
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Teléfono</th>
                                    <th class="text-center">Dirección</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                               
                                
                                @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->nombres}}</td>
                                    <td>{{$cliente->email}}</td>
                                    <td>{{$cliente->telefono}}</td>
                                    <td>{{$cliente->direccion}}</td>
                                    <td>
                                        <a href="{{route('clientes.detalles', $cliente->id)}}" class="view" title="View" data-toggle="tooltip"><i class="bi bi-eye-fill"></i></a>
                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="bi bi-pencil-fill ms-2 me-2"></i></a>
                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="bi bi-trash3-fill"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                               
                                <!-- <tr>
                                    <td>1</td>
                                    <td>Juan Perez</td>
                                    <td>juan.perez@example.com</td>
                                    <td>+123456789</td>
                                    <td>Calle Falsa 123</td>
                                    <td>
                                        <a href="#" class="view" title="View" data-toggle="tooltip"><i class="bi bi-eye-fill"></i></a>
                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="bi bi-pencil-fill ms-2 me-2"></i></a>
                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="bi bi-trash3-fill"></i></a>
                                    </td>
                                </tr>
                                 -->
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>        
        </div>  
    </div>
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
        margin: 0;
        overflow: hidden;
    }
    .container-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
    }
    .container {
        background: #e6e6e6cc;
        border: 1px solid #002349;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 1200px;
        overflow: hidden;
    }
    .btnCreate {
        background-color: transparent;
        border-color: #002349;
        color: #002349;
        font-size: 1.8vh;
    }
    .btnCreate:hover {
        border: #002349;
        background-color: #002349;
        color: #fff;
        font-size: 1.8vh;
    }
    .table-responsive {
        margin: 30px 0;
        font-size: 1.8vh;
    }
    .table-wrapper {
        min-width: 1000px;
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
        min-height: 45px;
    }
    .content-title {
        width: 100%;
    }
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 3.5vh;
    }
    .table-container {
        max-height: 450px;
        overflow-y: auto;
        overflow-x: auto;
        white-space: nowrap;
    }
    .search-box {
    position: relative;
    float: right;
    }
    .search-box .input-group {
        min-width: 200px;
        position: absolute;
        right: 0;
    }
    .search-box .input-group-addon, .search-box input {
        border-color: #ddd;
        border-radius: 0;
    }
    .search-box .input-group-addon {
        border: none;
        border: none;
        background: transparent;
        position: absolute;
        z-index: 9;
    }
    .search-box input {
        height: 34px;
        padding-left: 28px;		
        box-shadow: none !important;
        border-width: 0 0 1px 0;
    }
    .search-box input:focus {
        border-color: #002349;
    }
    .search-box i {
        color: #a0a5b1;
        font-size: 19px;
        position: relative;
        top: 2px;
        left: -10px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }    
    table.table th:first-child {
        width: 60px;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
        cursor: pointer;
        margin: 0 5px;
        min-width: 24px;
    }    
    table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 1.2px;
    }
    /* Estilos para la barra de desplazamiento */
    /* WebKit (Chrome, Safari, Opera) */
    ::-webkit-scrollbar {
        width: 10px; /* Ancho de la barra de desplazamiento */
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1; /* Color de fondo de la pista */
    }

    ::-webkit-scrollbar-thumb {
        background-color: #002349; /* Color del 'scrollbar' */
        border-radius: 5px; /* Borde redondeado */
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: #a0a5b1; /* Color del 'scrollbar' al pasar el ratón */
    }
</style>
<script>
</body>
</html>

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