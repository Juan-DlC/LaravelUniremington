<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquiler</title>
    <style>
        .table-container {
            margin: 20px auto;
            padding: 20px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 90%;
            background-color: #f9f9f9;
        }
        .table-title {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 1.5em;
        }
        .table th {
            background-color: #007bff;
            color: white;
            text-align: center;
        }
        .table td, .table th {
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h1 class="table-title">Alquiler</h1>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo de Vehículo</th>
                    <th>Marca</th>
                    <th>Nombre del Cliente</th>
                    <th>Cédula</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alquilers as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->type_of_vehicle}}</td>
                    <td>{{$item->brand}}</td>
                    <td>{{$item->customer_name}}</td>
                    <td>{{$item->cedula}}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Borrar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
