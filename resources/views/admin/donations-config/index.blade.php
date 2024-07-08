@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endpush

@section('content')
@use('App\Models\LadingPageConfig')
@php
$instance = LadingPageConfig::getInstance();
@endphp

<div id="content" class="row mt-5 mb-5">
    <h2>Página donaciones</h2>
    <form action="{{ route('donations-form.update', ['donations_form' => $instance->id]) }}" method="post" enctype="multipart/form-data" id="contactForm">
        @csrf
        @method('patch')
    </form>
    <button class="btn btn-primary mt-5 mb-5" form="contactForm">Guardar</button>
    <table clss="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Imagen fondo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" class="form-control" name="donations_banner_title" form="contactForm" value="{{ $instance->donations_banner_title }}">
                </td>
                <td>
                    <div class="row">
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="donations_banner_image" id="email" form="contactForm" value="{{ $instance->donations_banner_image }}">
                        </div>
                        <div class="col-sm-4">
                            @if ($instance->donations_banner_image)
                            <img src="{{ asset('images/' . $instance->donations_banner_image) }}" alt="" style="width: 60px">
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="mt-3">
                        <label for="donations_banner_description">Descripción</label>
                        <textarea name="donations_banner_description" id="donations_banner_description" class="form-control" form="contactForm"></textarea>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        CKEDITOR.replace('donations_banner_description');

        CKEDITOR.instances.donations_banner_description.on('instanceReady', function() {
            if ($(".cke_notification_close").length > 0)
                $(".cke_notification_close")[0].click();

            CKEDITOR.instances.donations_banner_description.setData(`{!! $instance->donations_banner_description !!}`);
        });
    });
</script>
@endpush