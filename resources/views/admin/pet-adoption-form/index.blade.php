@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endpush

@section('content')
<h1>Solicitudes de adopciones</h1>

<div id="content" class="row mt-5">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Trabajo</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($forms as $form)
            <tr>
                <td>{{ $form->id }}</td>
                <td>{{ $form->name }}</td>
                <td>{{ $form->age }}</td>
                <td>{{ $form->work }}</td>
                <td>{{ $form->email }}</td>
                <td>{{ $form->phone }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-success viewForm" data-id="{{ $form->id }}">
                            <i class="bi bi-file-earmark-person"></i>
                        </button>
                        <button class="btn btn-danger deleteForm" data-id="{{ $form->id }}">
                            <i class="fs-4 bi-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="showFormDetails" tabindex="-1" aria-labelledby="showFormDetailsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showFormDetailsLabel">Detalles adopción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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

    $(".viewForm").on('click', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '/admin/pet-adoption-form/' + id,
            type: 'GET',
            success: function(response) {
                $("#showFormDetails .modal-body").html(response);
                $("#showFormDetails").modal('show');
            }
        });
    });

    $(".deleteForm").on('click', function() {
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
                    url: '/admin/pet-adoption-form/' + id,
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