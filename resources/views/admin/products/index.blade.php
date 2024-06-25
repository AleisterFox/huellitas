@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endpush

@section('content')
<h1>Productos</h1>

<div class="row mt-5 mb-5 d-flex justify-content-end">
    <div class="col-sm-5 text-end">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">Agregar producto</button>
    </div>
</div>

<div id="content" class="row">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Imagen</th>
                <th>Descripción</th>
                <th>Precio venta</th>
                <th>Inventario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)

            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    @if ($product->image)
                    <img src="/images/{{ $product->image }}" alt="{{ $product->name }}" style="width: 100px;">
                    @endif
                </td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->in_stock }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-warning updateCategories" 
                            data-id="{{ $product->id }}">
                            <i class="fa-4 bi-tags"></i>
                        </button>
                        <button class="btn btn-success updateProductImages" 
                            data-id="{{ $product->id }}"
                            data-image2="/images/{{ $product->image2 }}"
                            data-image3="/images/{{ $product->image3 }}"
                            data-image4="/images/{{ $product->image4 }}"
                            data-image5="/images/{{ $product->image5 }}"
                            >
                            <i class="bi bi-card-image"></i>
                        </button>
                        <button class="btn btn-info updateProduct" id="updateProduct-{{ $product->id }}" data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-description="{{ $product->description }}" data-price="{{ $product->price }}" data-in_stock="{{ $product->in_stock }}" data-category_id="{{ $product->category_id }}">
                            <i class="fs-4 bi-grid"></i>
                        </button>
                        <button data-id="{{ $product->id }}" type="submit" class="deleteProduct btn btn-danger">
                            <i class="fs-4 bi-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Agregar categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addCategoryForm" method="post">
                    @csrf
                    <input type="hidden" id="productId">
                    <div class="update-categories">

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="updateCategoriesButton" class="btn btn-primary">Agregar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Agregar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="productId">
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

<div class="modal fade" id="updateProductModal" tabindex="-1" aria-labelledby="updateProductModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateProductModal">Actualizar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" method="post">
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
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Imagen</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="updateProductButton" class="btn btn-primary">Actualizar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="updateImagesProductModal" tabindex="-1" aria-labelledby="updateImagesProductModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateImagesProductModal">Actualizar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" method="post">
                    @csrf
                    <input type="hidden" id="productId">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image" class="form-label">Imagen1</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                                <img src="" id="img-image2" class="img-fluid" width="250px">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image2" class="form-label">Imagen2</label>
                                <input type="file" class="form-control" id="image2" name="image2" required>
                                <img src="" id="img-image3" class="img-fluid" width="250px">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image3" class="form-label">Imagen3</label>
                                <input type="file" class="form-control" id="image3" name="image3" required>
                                <img src="" id="img-image4" class="img-fluid" width="250px">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image4" class="form-label">Imagen4</label>
                                <input type="file" class="form-control" id="image4" name="image4" required>
                                <img src="" id="img-image5" class="img-fluid" width="250px">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="updateImagesProductModalButton" class="btn btn-primary">Actualizar</button>
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

    $(".updateCategories").on('click', function() {
        var id = $(this).data('id');

        $("#productId").val(id);

        $.ajax({
            url: '/admin/productos/' + id + '/categorias',
            type: 'GET',
            success: function(response) {
                $("#addCategoryModal").modal('show');
                $("#addCategoryModal .update-categories").html(response);
            }
        });
    });

    $(".updateProductImages").on('click', function() {
        var id = $(this).data('id');
        var image2 = $(this).data('image2');
        var image3 = $(this).data('image3');
        var image4 = $(this).data('image4');
        var image5 = $(this).data('image5');

        $("#productId").val(id);
        $("#updateImagesProductModal #img-image2").attr('src', image2);
        $("#updateImagesProductModal #img-image3").attr('src', image3);
        $("#updateImagesProductModal #img-image4").attr('src', image4);
        $("#updateImagesProductModal #img-image5").attr('src', image5);

        $("#updateImagesProductModal").modal('show');
    });

    $("#updateCategoriesButton").on('click', function() {
        var id = $("#productId").val();
        var categories = [];

        $("#addCategoryModal input[type=checkbox]:checked").each(function() {
            categories.push($(this).data('id'));
        });

        $.ajax({
            url: '/admin/productos/' + id + '/categorias',
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                '_method': 'PUT',
                categories: categories
            },
            success: function(response) {
                Swal.fire({
                    title: 'Actualizado!',
                    text: 'El registro ha sido actualizado',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then(function() {
                    location.reload();
                });
            }
        });
    });

    $(".updateProduct").on('click', function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var description = $(this).data('description');
        var price = $(this).data('price');
        var in_stock = $(this).data('in_stock');

        $("#productId").val(id);

        $("#updateProductModal #name").val(name);
        $("#updateProductModal #description").val(description);
        $("#updateProductModal #price").val(price);
        $("#updateProductModal #in_stock").val(in_stock);

        $("#updateProductModal").modal('show');
    });

    $("#updateImagesProductModalButton").on('click', function() {
        var id = $("#productId").val();
        var formData = new FormData();

        if ($("#updateImagesProductModal #image")[0].files.length > 0) {
            formData.append('image2', $("#updateImagesProductModal #image")[0].files[0]);
        }

        if ($("#updateImagesProductModal #image2")[0].files.length > 0) {
            formData.append('image3', $("#updateImagesProductModal #image2")[0].files[0]);
        }

        if ($("#updateImagesProductModal #image3")[0].files.length > 0) {
            formData.append('image4', $("#updateImagesProductModal #image3")[0].files[0]);
        }

        if ($("#updateImagesProductModal #image4")[0].files.length > 0) {
            formData.append('image5', $("#updateImagesProductModal #image4")[0].files[0]);
        }

        formData.append('_token', "{{ csrf_token() }}");
        formData.append('_method', 'PUT');

        $.ajax({
            url: '/admin/productos/' + id + '/imagenes',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                Swal.fire({
                    title: 'Actualizado!',
                    text: 'El registro ha sido actualizado',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then(function() {
                    location.reload();
                });
            }
        });
    });

    $("#updateProductButton").on('click', function() {
        var id = $("#productId").val();
        var name = $("#updateProductModal #name").val();
        var description = $("#updateProductModal #description").val();
        var price = $("#updateProductModal #price").val();
        var in_stock = $("#updateProductModal #in_stock").val();
        var image = $("#updateProductModal #image").val();

        var formData = new FormData();

        if (image) {
            formData.append('image', $("#updateProductModal #image")[0].files[0]);
        }

        formData.append('name', name);
        formData.append('description', description);
        formData.append('price', price);
        formData.append('in_stock', in_stock);
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('_method', 'PUT');

        $.ajax({
            url: '/admin/productos/' + id,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                Swal.fire({
                    title: 'Actualizado!',
                    text: 'El registro ha sido actualizado',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then(function() {
                    location.reload();
                });
            }
        });
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
                        _method: "DELETE"
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