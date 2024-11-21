@extends('layout.plantilla')

@section('title', 'Index de productos')

@section('content')

<div class="container mt-5 d-flex justify-content-center">
    <div class="card" style="width: 90%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4>Index de Productos</h4>
            <a href="{{ route('products.create') }}" class="btn btn-light">Nuevo Producto</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Proveedor</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->name }}</td>
                        <td>${{ number_format($item->price, 2) }}</td>
                        <td>{{ $item->ammount }}</td>
                        <td>{{ $item->supplier }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a href="{{ route('products.edit', $item->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('products.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
               {{$products->links()}}
            </div>
            <br>
            <a href="{{route ('products.pdf')}}" target="_blank" class="btn btn-secondary">Generar PDF</a>
        </div>
    </div>
</div>

@endsection
