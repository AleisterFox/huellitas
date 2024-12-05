@extends('layouts.main')

@section('content')
@use('App\Models\LadingPageConfig')
@php
    $instance = LadingPageConfig::getInstance();
@endphp
<main>
    <section id="portada-donaciones">
        <figure>
            @if ($instance->donations_banner_image)
                <img src="{{ asset('images/' . $instance->donations_banner_image) }}" alt="">
            @else
                <img src="img/donativos.jpg" alt="">
            @endif
        </figure>
        <h1>{{ $instance->donations_banner_title }}</h1>
    </section>
    <section id="donativos">
        <figure><img src="img/donativos-vector.png" alt=""></figure>
        @if(!$instance->donations_banner_description)
            <div class="container">
                <h2>Hacer un donativo a Huellitas Diferentes</h2>
                <p>Actos de generosidad y compromiso como el que estás a punto de realizar, permiten que podamos seguir desarrollando nuestra labor, por lo cual te estamos muy agradecidos. De esta forma, tu aportación económica se convierte en acción directa para la protección de animales en situación de peligro.</p>
                <br>
                <h2>¿Cómo donar?</h2>
                <p>Para facilitar las donaciones hemos habiltado varios canales por el que nos puedes hacer llegar tu donación. Elige el que mejor te venga.</p>
                <details>
                    <summary>Transferencia</summary>
                    <p>0123456789</p>
                </details>
                <details>
                    <summary>Paypal</summary>
                    <p>Paypal account</p>
                </details>
                <br>

            </div>
        @else
            <div class="container">
                {!! $instance->donations_banner_description !!}

                <h2>¿Tienes preguntas?</h2>
                <p>Si tienes preguntas puedes llamarnos al <strong><a href="tel:3314148548">{{ $instance->contact_phone }}</a></strong> También puedes enviar un correo a <strong><a href="mailto:{{ $instance->contact_email }}">{{ $instance->contact_email }}</a></strong></p>
            </div>
        @endif
    </section>
</main>
@endsection