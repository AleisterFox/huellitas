@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endpush

@section('content')
<h1>Perritos</h1>

<div class="row mt-5 mb-5 d-flex justify-content-end">
    <div class="col-sm-5 text-end">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">Agregar perrito</button>
    </div>
</div>

<div id="content" class="row">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Imagen</th>
                <th>Name</th>
                <th>Descripción</th>
                <th>Raza</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>
                    @if ($pet->image)
                        <img src="{{ asset('/pets/' . $pet->image) }}" alt="{{ $pet->name }}" style="width: 60px;">
                    @endif
                </td>
                <td>{{ $pet->name }}</td>
                <td>
                    <div style="width: 350px;">
                        {{ $pet->description }}
                    </div>
                </td>
                <td>{{ $pet->raza->name }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-primary updatePet" 
                            data-id="{{ $pet->id }}" 
                            data-name="{{ $pet->name }}" 
                            data-description="{{ $pet->description }}" 
                            data-age="{{ $pet->age }}"
                            data-sex="{{ $pet->sex }}"
                            data-breed="{{ $pet->breed }}"
                            data-size="{{ $pet->size }}"
                            data-live_with="{{ $pet->live_with }}"
                            >
                            <i class="fs-4 bi-grid"></i>
                        </button>
                        <button class="btn btn-success updatePetImages" 
                            data-id="{{ $pet->id }}"
                            data-image2="{{ asset('/pets/' . $pet->image2) }}"
                            data-image3="{{ asset('/pets/' . $pet->image3) }}"
                            data-image4="{{ asset('/pets/' . $pet->image4) }}""
                            >
                            <i class="bi bi-card-image"></i>
                        </button>
                        <button class="btn btn-danger deletePet" data-id="{{ $pet->id }}">
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
                <h5 class="modal-title" id="addProductModalLabel">Agregar Perrito</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" action="{{ route('pets.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.pets._form')
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="addProductForm" class="btn btn-primary">Agregar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="updatePetModal" tabindex="-1" aria-labelledby="updatePetModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updatePetModal">Actualizar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" method="post">
                    @csrf
                    @include('admin.pets._form')
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="updatePetButton" class="btn btn-primary">Actualizar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="updateImagesPetModal" tabindex="-1" aria-labelledby="updateImagesPetModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateImagesPetModal">Actualizar imagenes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" method="post">
                    @csrf
                    <input type="hidden" id="productId">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image" class="form-label">Imagen2</label>
                                <input type="file" class="form-control" id="image2" name="image2" required>
                                <img id="img-image2" class="img-fluid" width="250px">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image2" class="form-label">Imagen3</label>
                                <input type="file" class="form-control" id="image3" name="image3" required>
                                <img id="img-image3" class="img-fluid" width="250px">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="image3" class="form-label">Imagen4</label>
                                <input type="file" class="form-control" id="image4" name="image4" required>
                                <img id="img-image4" class="img-fluid" width="250px">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="updateImagesPetModalButton" class="btn btn-primary">Actualizar</button>
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
            url: '/admin/pets/' + id + '/categorias',
            type: 'GET',
            success: function(response) {
                $("#addCategoryModal").modal('show');
                $("#addCategoryModal .update-categories").html(response);
            }
        });
    });

    $("#updateCategoriesButton").on('click', function() {
        var id = $("#productId").val();
        var categories = [];

        $("#addCategoryModal input[type=checkbox]:checked").each(function() {
            categories.push($(this).data('id'));
        });

        $.ajax({
            url: '/admin/pets/' + id + '/categorias',
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

    $(".updatePet").on('click', function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var description = $(this).data('description');
        var age = $(this).data('age');
        var sex = $(this).data('sex');
        var breed = $(this).data('breed');
        var size = $(this).data('size');
        var live_with = $(this).data('live_with');

        $("#productId").val(id);

        $("#updatePetModal #name").val(name);
        $("#updatePetModal #description").val(description);
        $("#updatePetModal #age").val(age);
        $("#updatePetModal #sex").val(sex);
        $("#updatePetModal #breed").val(breed);
        $("#updatePetModal #size").val(size);
        $("#updatePetModal #live_with").val(live_with);

        $("#updatePetModal").modal('show');
    });

    $(".updatePetImages").on('click', function() {
        var id = $(this).data('id');
        var image2 = $(this).data('image2');
        var image3 = $(this).data('image3');
        var image4 = $(this).data('image4');
        var image5 = $(this).data('image5');

        console.log(image2, image3, image4, image5)
        $("#petId").val(id);
        if (image2) {
            $("#updateImagesPetModal #img-image2").attr('src', image2);
        }
        
        if (image3) {
            $("#updateImagesPetModal #img-image3").attr('src', image3);
        }

        if (image4) {
            $("#updateImagesPetModal #img-image4").attr('src', image4);
        }

        if (image5) {
            $("#updateImagesPetModal #img-image5").attr('src', image5);
        }

        $("#updateImagesPetModal").modal('show');
    });

    $("#updateImagesPetModalButton").on('click', function() {
        var id = $("#petId").val();
        var formData = new FormData();

        if ($("#updateImagesPetModal #image2")[0].files.length > 0) {
            formData.append('image2', $("#updateImagesPetModal #image2")[0].files[0]);
        }

        if ($("#updateImagesPetModal #image3")[0].files.length > 0) {
            formData.append('image3', $("#updateImagesPetModal #image3")[0].files[0]);
        }

        if ($("#updateImagesPetModal #image4")[0].files.length > 0) {
            formData.append('image4', $("#updateImagesPetModal #image4")[0].files[0]);
        }

        formData.append('_token', "{{ csrf_token() }}");
        formData.append('_method', 'PUT');

        $.ajax({
            url: '/admin/pets/' + id + '/imagenes',
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

    $("#updatePetButton").on('click', function() {
        var id = $("#productId").val();
        var name = $("#updatePetModal #name").val();
        var description = $("#updatePetModal #description").val();
        var age = $("#updatePetModal #age").val();
        var sex = $("#updatePetModal #sex").val();
        var breed = $("#updatePetModal #breed").val();
        var size = $("#updatePetModal #size").val();
        var live_with = $("#updatePetModal #live_with").val();
        var image = $("#updatePetModal #image").val();

        var formData = new FormData();

        if (image) {
            formData.append('image', $("#updatePetModal #image")[0].files[0]);
        }

        formData.append('name', name);
        formData.append('description', description);
        formData.append('age', age);
        formData.append('sex', sex);
        formData.append('breed', breed);
        formData.append('size', size);
        formData.append('live_with', live_with);
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('_method', 'PUT');

        $.ajax({
            url: '/admin/pets/' + id,
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

    $(".deletePet").on('click', function() {
        var id = $(this).data('id');
        Swal.fire({
            text: 'Desea eliminar este registro?',
            icon: 'error',
            confirmButtonText: 'Confirmar',
            showCancelButton: true,
            cancelButtonText: 'Cancelar'
        }).then(function(result) {
            if (result.isConfirmed) {
                console.log('/admin/pets/' + id)
                $.ajax({
                    url: '/admin/pets/' + id,
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