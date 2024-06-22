@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endpush

@section('content')
<h1>Categorias</h1>

<div class="row mt-5 mb-5 d-flex justify-content-end">
    <div class="col-sm-5 text-end">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Agregar categoria</button>
    </div>
</div>

<div id="content" class="row">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Categoria Padre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->parent?->name }}</td>
                <td>
                    <button class="btn btn-info updateCategory"
                        data-id="{{ $category->id }}"
                        data-name="{{ $category->name }}"
                        data-parent_id="{{ $category->parent_id }}"
                        data-category_id="{{ $category->id }}"
                    >
                        <i class="fs-4 bi-grid"></i>
                    </button>
                    @if ($category->parent)
                        <button data-id="{{ $category->id }}" type="submit" class="deleteCategory btn btn-danger">
                            <i class="fs-4 bi-trash"></i>
                        </button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Agregar categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" action="{{ route('categorias.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="categoryId">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoría padre</label>
                        <select class="form-select" id="category_id" name="parent_id" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Imagen</label>
                        <input type="file" class="form-control" id="image" name="image" required>
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

<div class="modal fade" id="updateCategoryModal" tabindex="-1" aria-labelledby="updateCategoryModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateCategoryModal">Actualizar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm"  method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoría padre</label>
                        <select class="form-select" id="parent_id" name="parent_id" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Imagen</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="updateCategoryButton" class="btn btn-primary">Actualizar</button>
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

    $(".updateCategory").on('click', function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var parent_id = $(this).data('parent_id');
        var category_id = $(this).data('category_id');

        $("#categoryId").val(id);

        $("#updateCategoryModal #category_id").val(category_id);
        $("#updateCategoryModal #name").val(name);
        $("#updateCategoryModal #parent_id").val(parent_id);

        $("#updateCategoryModal").modal('show');
    }); 

    $("#updateCategoryButton").on('click', function() {
        var id = $("#categoryId").val();
        var name = $("#updateCategoryModal #name").val();
        var parent_id = $("#updateCategoryModal #parent_id").val();
        var category_id = $("#updateCategoryModal #category_id").val();

        $.ajax({
            url: '/admin/categorias/' + id,
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                _method:"PUT",
                name: name,
                parent_id: parent_id,
                category_id: category_id
            },
            success: function(response) {
                Swal.fire({
                    title: 'Actualizado!',
                    text: 'El registro ha sido actualizado',
                    icon: 'success',
                    confirmButtonText: 'Cool'
                }).then(function() {
                    location.reload();
                });
            }
        });
    }); 
    
    $(".deleteCategory").on('click', function() {
        var id = $(this).data('id');
        Swal.fire({
            text: 'Desea eliminar este registro?',
            icon: 'error',
            confirmButtonText: 'Confirmar',
            showCancelButton: true,
            cancelButtonText: 'Cancelar'
        }).then(function(result) {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/admin/categorias/' + id,
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
                            confirmButtonText: 'Aceptar'
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