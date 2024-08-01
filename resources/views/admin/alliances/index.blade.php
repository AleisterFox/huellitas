@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endpush

@section('content')
<h1>Alianzas</h1>

<div class="row mt-5 mb-5 d-flex justify-content-end">
    <div class="col-sm-5 text-end">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSlideModal">Agregar Imagen</button>
    </div>
</div>

<div id="content" class="row">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alliances as $alliance)
            <tr>
                <td>{{ $alliance->id }}</td>
                <td>
                    @if ($alliance->image)
                        <img src="{{ asset('/slides/'. $alliance->image) }}" alt="{{ $alliance->name }}" style="width: 60px;">
                    @endif
                </td>
                <td>
                    <button class="btn btn-info updateSlide" 
                        id="updateSlide-{{ $alliance->id }}" 
                        data-id="{{ $alliance->id }}" >
                        <i class="fs-4 bi-grid"></i>
                    </button>
                    <button data-id="{{ $alliance->id }}" type="submit" class="deleteSlide btn btn-danger">
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
                <form id="addSlideForm" action="{{ route('alianzas.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.alliances._form')
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
                <form id="updateSlideForm" action="{{ route('alianzas.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.alliances._form')
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
        
        $("#allianceId").val(id);

        $("#updateSlideModal").modal('show');
    });

    $("#updateSlideButton").on('click', function() {
        var id = $("#allianceId").val();

        var formData = new FormData();
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('_method', "PUT");
        
        if ($("#updateSlideModal #image")[0].files.length > 0) {
            formData.append('image', $("#updateSlideModal #image")[0].files[0]);
        }

        $.ajax({
            url: '/admin/alianzas/' + id,
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
                    url: '/admin/alianzas/' + id,
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