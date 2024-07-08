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
    <h2>Página Foster to Adopt</h2>
    <form action="{{ route('foster-to-adopt.update', ['foster_to_adopt' => $instance->id]) }}" method="post" enctype="multipart/form-data" id="contactForm">
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
                    <input type="text" class="form-control" name="adoption_banner_title" form="contactForm" value="{{ $instance->adoption_banner_title }}">
                </td>
                <td>
                    <div class="row">
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="adoption_banner_image" id="email" form="contactForm" value="{{ $instance->adoption_banner_image }}">
                        </div>
                        <div class="col-sm-4">
                            @if ($instance->adoption_banner_image)
                            <img src="{{ asset('images/' . $instance->adoption_banner_image) }}" alt="" style="width: 60px">
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <label for="adoption_banner_button_text_1">Imagen(Derecha)</label>
                            <input type="file" class="form-control" name="adoption_banner_image_1" form="contactForm">
                            @if ($instance->adoption_banner_image_1)
                            <img src="{{ asset('images/' . $instance->adoption_banner_image_1) }}" alt="" style="width: 100px">
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label for="adoption_banner_button_text_1">Imagen(Izquierda)</label>
                            <input type="file" class="form-control" name="adoption_banner_image_2" form="contactForm">
                            @if ($instance->adoption_banner_image_2)
                            <img src="{{ asset('images/' . $instance->adoption_banner_image_2) }}" alt="" style="width: 100px">
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="mt-3">
                        <label for="adoption_banner_description_1">Descripción(Izq)</label>
                        <textarea name="adoption_banner_description_1" id="adoption_banner_description_1" class="form-control" form="contactForm"></textarea>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <div class="mt-3">
                        <label for="adoption_banner_description_2">Descripción(Derecha)</label>
                        <textarea name="adoption_banner_description_2" id="adoption_banner_description_2" class="form-control" form="contactForm"></textarea>
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
        CKEDITOR.replace('adoption_banner_description_1');
        CKEDITOR.replace('adoption_banner_description_2');

        CKEDITOR.instances.adoption_banner_description_1.on('instanceReady', function() {
            if ($(".cke_notification_close").length > 0)
                $(".cke_notification_close")[0].click();

            CKEDITOR.instances.adoption_banner_description_1.setData(`{!! $instance->adoption_banner_description_1 !!}`);
        });

        CKEDITOR.instances.adoption_banner_description_2.on('instanceReady', function() {
            if ($(".cke_notification_close").length > 1)
                $(".cke_notification_close")[1].click();

            CKEDITOR.instances.adoption_banner_description_2.setData(`{!! $instance->adoption_banner_description_2 !!}`);
        });
    });
</script>
@endpush