@extends('layout.plantilla')

@section('title','Formulario Agregar Producto')

@section('content')

<div class="container mt-5 d-flex justify-content-center">
    <div class="card" style="width: 90%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-header bg-primary text-white">
            <h4>Agregar un producto</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="code">Código</label>
                        <input type="text" name="code" id="code" class="form-control" placeholder="Código del producto" maxlength="5" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Ej. Juan ..." required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="price">Precio</label>
                        <input type="number" name="price" id="price" class="form-control" placeholder="$" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="ammount">Cantidad</label>
                        <input type="number" name="ammount" id="ammount" class="form-control" placeholder="Ej. 123" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="price">Proveedor</label>
                        <input type="text" name="supplier" id="supplier" class="form-control" placeholder="Nombre del proveedor" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="ammount">Descripcion</label>
                        <input type="text" name="Description" id="Description" class="form-control" placeholder="Descripcion del producto" required>
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary">Agregar Producto</button>
                
                    <a href="/products" class="btn btn-info">Regresar</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
