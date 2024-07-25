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
    <h2>Formulario de contacto</h2>
    <form action="{{ route('config.update', ['config' => $instance->id]) }}" method="post" enctype="multipart/form-data" id="contactForm">
        @csrf
        @method('patch')
    </form>
    <button class="btn btn-primary mt-5 mb-5" form="contactForm">Guardar</button>
    <table clss="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Telefono</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Instagram</th>
                <th>Perritos Adoptados</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" class="form-control" name="contact_phone" id="phone" form="contactForm" value="{{ $instance->contact_phone }}">
                </td>
                <td>
                    <input type="text" class="form-control" name="contact_email" id="email" form="contactForm" value="{{ $instance->contact_email }}">
                </td>
                <td>
                    <input type="text" class="form-control" name="contact_facebook" id="facebook" form="contactForm" value="{{ $instance->contact_facebook }}">
                </td>
                <td>
                    <input type="text" class="form-control" name="contact_instagram" id="instagram" form="contactForm" value="{{ $instance->contact_instagram }}">
                </td>
                <td>
                    <input type="text" class="form-control" name="adopted_pets_count" id="adopted_pets_count" form="contactForm" value="{{ $instance->adopted_pets_count }}">
                </td>
            </tr>
        </tbody>
    </table>

    <div class="row mt-5">
        <h2>Formulario de texto banner</h2>
        <table clss="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="banner_main_quote_title" form="contactForm" value="{{ $instance->banner_main_quote_title }}">
                    </td>
                    <td>
                        <textarea name="banner_main_quote_description" form="contactForm" class="form-control">{{ $instance->banner_main_quote_description }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="banner_footer_quote_title" form="contactForm" value="{{ $instance->banner_footer_quote_title }}">
                    </td>
                    <td>
                        <textarea name="banner_footer_quote_description" form="contactForm" class="form-control">{{ $instance->banner_footer_quote_description }}</textarea>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row mt-5">
        <h2>Adopción de perritos</h2>
        <table clss="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="card_1_title" form="contactForm" value="{{ $instance->card_1_title }}">
                    </td>
                    <td>
                        <textarea name="card_1_text" form="contactForm" class="form-control">{{ $instance->card_1_text }}</textarea>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="card_1_image" form="contactForm">
                            </div>
                            <div class="col-sm-4">
                                @if($instance->card_1_image)
                                <img src="{{ asset('images/' . $instance->card_1_image) }}" alt="Imagen de adopción" style="width: 100px; height: 100px; object-fit: cover;">
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" class="form-control" name="card_2_title" form="contactForm" value="{{ $instance->card_2_title }}">
                    </td>
                    <td>
                        <textarea name="card_2_text" form="contactForm" class="form-control">{{ $instance->card_2_text }}</textarea>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="card_2_image" form="contactForm">
                            </div>
                            <div class="col-sm-4">
                                @if($instance->card_2_image)
                                <img src="{{ asset('images/' . $instance->card_2_image) }}" alt="Imagen de adopción" style="width: 100px; height: 100px; object-fit: cover;">
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" class="form-control" name="card_3_title" form="contactForm" value="{{ $instance->card_3_title }}">
                    </td>
                    <td>
                        <textarea name="card_3_text" form="contactForm" class="form-control">{{ $instance->card_3_text }}</textarea>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="card_3_image" form="contactForm">
                            </div>
                            <div class="col-sm-4">
                                @if($instance->card_3_image)
                                <img src="{{ asset('images/' . $instance->card_3_image) }}" alt="Imagen de adopción" style="width: 100px; height: 100px; object-fit: cover;">
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@if (false)
    <textarea name="" id="content-area"></textarea>
@endif

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content-area');
</script>
@endpush