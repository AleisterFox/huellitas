@extends('layouts.main')

@section('content')
@use('App\Models\LadingPageConfig')
@php
$instace = LadingPageConfig::getInstance();
@endphp
<main>
    <section id="hero">
        <div class="glide" id="hero-slider">
            @session('message')
            @include('layouts._alert', ['message' => $value])
            @endif
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    @if($slides->count() == 0)
                    <li style="border: 1px solid" class="glide__slide">
                        <figure><img src="/img/collie.jpg" alt="" /></figure>
                        <h1>¡Descubre a tu próximo compañero!</h1>
                        <p>
                            En nuestra tienda en línea encontrarás una amplia selección de
                            accesorios para consentir a tu nuevo amigo de cuatro patas.
                        </p>
                        <a href="" class="button">Contacto</a>
                    </li>
                    <li style="border: 1px solid" class="glide__slide">
                        <figure><img src="/img/victor.jpg" alt="" /></figure>
                        <h1>¡Descubre a tu próximo compañero!</h1>
                        <p>
                            En nuestra tienda en línea encontrarás una amplia selección de
                            accesorios para consentir a tu nuevo amigo de cuatro patas.
                        </p>
                        <a href="" class="button">Contacto</a>
                    </li>
                    <li style="border: 1px solid" class="glide__slide">
                        <figure><img src="/img/dormidos.jpg" alt="" /></figure>
                        <h1>¡Descubre a tu próximo compañero!</h1>
                        <p>
                            En nuestra tienda en línea encontrarás una amplia selección de
                            accesorios para consentir a tu nuevo amigo de cuatro patas.
                        </p>
                        <a href="" class="button">Contacto</a>
                    </li>
                    <li style="border: 1px solid" class="glide__slide">
                        <figure><img src="/img/cachorro.png" alt="" /></figure>
                        <h1>¡Descubre a tu próximo compañero!</h1>
                        <p>
                            En nuestra tienda en línea encontrarás una amplia selección de
                            accesorios para consentir a tu nuevo amigo de cuatro patas.
                        </p>
                        <a href="" class="button">Contacto</a>
                    </li>
                    @else
                    @foreach($slides as $slide)
                    <li style="border: 1px solid" class="glide__slide">
                        <figure><img src="{{ asset('slides/' . $slide->image) }}" alt="" /></figure>
                        <h1>{{ $slide->title }}</h1>
                        <p>
                            {{ $slide->description }}
                        </p>
                    </li>
                    @endforeach
                    @endif
                </ul>

                <div class="glide__bullets" data-glide-el="controls[nav]">
                    @if ($slides->count() > 1)
                    @for ($i = 0; $i < $slides->count(); $i++)
                        <button class="glide__bullet" data-glide-dir="={{ $i }}"></button>
                        @endfor
                        @else
                        <button class="glide__bullet" data-glide-dir="=0"></button>
                        <button class="glide__bullet" data-glide-dir="=1"></button>
                        <button class="glide__bullet" data-glide-dir="=2"></button>
                        <button class="glide__bullet" data-glide-dir="=3"></button>
                        @endif
                </div>
            </div>
        </div>

        <div class="dog__counter">
            <div class="container">
                <figure><img src="/img/huella.png" alt="" /></figure>
                <p>
                    Perritos <br />
                    Adoptados
                </p>
                <h2 class="counter">“{{ $instace->getAdoptionCount() }}”</h2>
            </div>
        </div>
    </section>
    <div class="banner">
        <figure class="vector"><img src="/img/banner1.png" alt="" /></figure>
        <figure class="huellas"><img src="/img/huellas-banner.png" alt=""></figure>
        <div class="container">
            <figure><img src="/img/comillas.png" alt=""></figure>
            <div class="text">
                <h2>{{ $instace->banner_main_quote_title }}</h2>
                <p>
                    {{ $instace->banner_main_quote_description }}
                </p>
            </div>
            <figure><img src="/img/comillas.png" alt=""></figure>
        </div>
    </div>
    <div class="main-rainbow">
        <section id="services">
            <div class="container">
                <div class="service">
                    <figure>
                        @if ($instace->card_1_image)
                        <img src="{{ asset('images/' . $instace->card_1_image) }}" alt="">
                        @else
                        <img src="/img/victor.jpg" alt="">
                        @endif
                    </figure>
                    <h4 class="title">{{ $instace->card_1_title }}</h4>
                    <p>{{ $instace->card_1_text }}</p>
                    <a href="/perritos" class="button">Ver más <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service">
                    <figure>
                        @if ($instace->card_2_image)
                        <img src="{{ asset('images/' . $instace->card_2_image) }}" alt="">
                        @else
                        <img src="/img/donativos.jpg" alt="">
                        @endif
                    </figure>
                    <h4 class="title">{{ $instace->card_2_title }}</h4>
                    <p>{{ $instace->card_2_text }}</p>
                    <a href="/donaciones" class="button">Ver más <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service">
                    <figure>
                        @if ($instace->card_3_image)
                        <img src="{{ asset('images/' . $instace->card_3_image) }}" alt="">
                        @else
                        <img src="/img/cachorro.png" alt="">
                        @endif
                    </figure>
                    <h4 class="title">{{ $instace->card_3_title }}</h4>
                    <p>{{ $instace->card_3_text }}</p>
                    <a href="/adopciones" class="button">Ver más <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <div class="cta-banner">
            <figure><img src="/img/dormidos.jpg" alt=""></figure>
            <h2>¡Descubre a tu próximo compañero!</h2>
            <div class="buttons">
                <a href="/perritos" class="button">Ver catálogo</a>
                <a href="/donaciones" class="button__secondary">Hacer Donativo</a>
            </div>
        </div>

        <section id="products">
            <div class="content">
                <div class="filters">
                    <h3>Productos</h3>
                    <form action="">
                        <div class="option">
                            <label for="option1">Todos</label>
                            <input type="checkbox" id="default-category" name="categories" class="category-checkbox" value="0" checked>
                        </div>
                        @foreach ($categories as $category)
                        <div class="option">
                            <label for="option1">{{ $category->name }}</label>
                            <input type="checkbox" name="categories" class="category-checkbox" value="{{ $category->id }}">
                        </div>
                        @endforeach
                    </form>
                </div>
                <div class="products-container">
                    @each('landing._product', $products, 'product')
                </div>
            </div>
        </section>

        <section id="alianzas">
            <h2>{{ $instace->banner_footer_quote_title }}</h2>
            <p>
                {{ $instace->banner_footer_quote_description }}
            </p>
            <div class="alianzas__logos">
                @foreach ($alliances as $alliance)
                <figure><img src="{{ asset('slides/' . $alliance->image) }}" alt=""></figure>
                @endforeach
            </div>
        </section>

    </div>
    <section id="contact">
        <div class="container">
            <div class="left">
                <h2>Contacto</h2>
                <a href="tel:{{ $instace->contact_phone }}"><i class="fas fa-phone"></i> &nbsp; {{ $instace->contact_phone }}</a>
                <a href="mailto:{{ $instace->contact_email }}"><i class="fas fa-envelope"></i>&nbsp;{{ $instace->contact_email }}</a>
                <div class="socials">
                    <a href="{{ $instace->contact_facebook }}"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $instace->contact_instagram }}"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <div class="right">
                <form action="{{ route('contacto.store') }}" method="post">
                    @csrf
                    <input type="text" name="name" id="name" placeholder="Nombre*" required>
                    <input type="tel" name="phone" id="phone" placeholder="Tel.">
                    <input type="email" name="email" id="email" placeholder="Email*" required>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
                    <button type="submit" class="button">Enviar</button>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
    var glide = new Glide("#hero-slider", {
        type: "carousel",
        perView: 1,
        autoplay: 5000,
        animationDuration: 2000,
        animationTimingFunction: "ease-in-out",
    });

    glide.mount();

    $(".category-checkbox").on('click', function() {

        if ($(this).val() != 0) {
            $('#default-category').prop('checked', false);
        } else {
            $('.category-checkbox').prop('checked', false);
            $(this).prop('checked', true);
        }

        let categories = $('.category-checkbox:checked').map(function() {
            return $(this).val();
        }).get();

        $.ajax({
            url: '/',
            method: 'POST',
            data: {
                categories: categories
            },
            success: function(data) {
                $('.products-container').html(data);
            }
        });
    });
</script>
</script>

@endpush