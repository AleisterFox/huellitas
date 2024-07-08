@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endpush

@section('content')
<h1>Slides</h1>

<div class="row mt-5 mb-5 d-flex justify-content-end">
    <div class="col-sm-5 text-end">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSlideModal">Agregar slide</button>
    </div>
</div>

<div id="content" class="row">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($slides as $slide)
            <tr>
                <td>{{ $slide->id }}</td>
                <td>{{ $slide->title }}</td>
                <td>
                    @if ($slide->image)
                        <img src="{{ asset('/slides/'. $slide->image) }}" alt="{{ $slide->name }}" style="width: 60px;">
                    @endif
                </td>
                <td>
                    <div style="max-width: 250px;">
                        {{ $slide->description }}
                    </div>
                </td>
                <td>
                    <button class="btn btn-info updateSlide" 
                        id="updateSlide-{{ $slide->id }}" 
                        data-id="{{ $slide->id }}" 
                        data-title="{{ $slide->title }}" 
                        data-description="{{ $slide->description }}">
                        <i class="fs-4 bi-grid"></i>
                    </button>
                    <button data-id="{{ $slide->id }}" type="submit" class="deleteSlide btn btn-danger">
                        <i class="fs-4 bi-trash"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="addSlideModal" tabindex="-1" aria-labelledby="addSlideModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSlideModalLabel">Agregar slide</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addSlideForm" action="{{ route('slides.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.slides._form')
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="addSlideForm" class="btn btn-primary">Agregar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="updateSlideModal" tabindex="-1" aria-labelledby="updateSlideModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateSlideModalLabel">Actualizar slide</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updateSlideForm" action="{{ route('slides.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.slides._form')
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="updateSlideButton" class="btn btn-primary">Agregar</button>
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

    $(".updateSlide").on('click', function() {
        var id = $(this).data('id');
        var title = $(this).data('title');
        var description = $(this).data('description');
        
        $("#slideId").val(id);

        $("#updateSlideModal #title").val(title);
        $("#updateSlideModal #description").val(description);

        $("#updateSlideModal").modal('show');
    });

    $("#updateSlideButton").on('click', function() {
        var id = $("#slideId").val();
        var title = $("#updateSlideModal #title").val();
        var description = $("#updateSlideModal #description").val();

        var formData = new FormData();
        formData.append('title', title);
        formData.append('description', description);
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('_method', "PUT");
        
        if ($("#updateSlideModal #image")[0].files.length > 0) {
            formData.append('image', $("#updateSlideModal #image")[0].files[0]);
        }

        $.ajax({
            url: '/admin/slides/' + id,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
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

    $(".deleteSlide").on('click', function() {
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
                    url: '/admin/slides/' + id,
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