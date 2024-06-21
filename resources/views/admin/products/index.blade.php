@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endpush

@section('content')
<h3>Productos</h3>

<div class="row mt-5 mb-5 d-flex justify-content-end">
    <div class="col-sm-5 text-end">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">Agregar producto</button>
    </div>
</div>

<div id="content" class="row">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>En stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)

            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->in_stock }}</td>
                <td>
                    <button data-id="{{ $product->id }}" type="submit" class="deleteProduct btn btn-danger">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Agregar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" action="{{ route('productos.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label" required>Descripción</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label" required>Precio</label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label" required>Stock</label>
                        <input type="number" class="form-control" id="in_stock" name="in_stock">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoría</label>
                        <select class="form-select" id="category_id" name="category_id">
                            <option value="1">Categoría 1</option>
                            <option value="2">Categoría 2</option>
                            <option value="3">Categoría 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Imagen</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="addProductForm" class="btn btn-primary">Agregar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#example', {
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
        }
    });

    $(".deleteProduct").on('click', function() {
        var id = $(this).data('id');
        Swal.fire({
            text: 'Desea eliminar este registro?',
            icon: 'error',
            confirmButtonText: 'Confirmar',
            showCancelButton: true,
            cancelButtonText: 'Cancelar'
        }).then(function(result) {
            if (result.isConfirmed) {
                console.log('/admin/productos/' + id)
                $.ajax({
                    url: '/admin/productos/' + id,
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        _method:"DELETE"
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Eliminado!',
                            text: 'El registro ha sido eliminado',
                            icon: 'success',
                            confirmButtonText: 'Cool'
                        }).then(function() {
                            location.reload();
                        });
                    }
                });
            }
        });
    });

</script>
@endpush