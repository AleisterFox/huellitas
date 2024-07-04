@extends('layouts.main')

@section('content')
<main>
    <section id="hero">
        <div class="glide" id="hero-slider">
            @session('message')
                @include('layouts._alert', ['message' => $value])
            @endif
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">

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
                </ul>

                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                    <button class="glide__bullet" data-glide-dir="=3"></button>
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
                <h2 class="counter">“12”</h2>
            </div>
        </div>
    </section>
    <div class="banner">
        <figure class="vector"><img src="/img/banner1.png" alt="" /></figure>
        <figure class="huellas"><img src="/img/huellas-banner.png" alt=""></figure>
        <div class="container">
            <figure><img src="/img/comillas.png" alt=""></figure>
            <div class="text">
                <h2>Dejando huella en tu corazón</h2>
                <p>
                    En nuestra organización de adopción de perritos, nos dedicamos a
                    encontrar hogares amorosos para perros en necesidad. <strong>¡Únete a
                        nosotros en esta noble misión!</strong>
                </p>
            </div>
            <figure><img src="/img/comillas.png" alt=""></figure>
        </div>
    </div>
    <div class="main-rainbow">
        <section id="services">
            <div class="container">
                <div class="service">
                    <figure><img src="/img/victor.jpg" alt=""></figure>
                    <h4 class="title">Adopción de perritos</h4>
                    <p>Ofrecemos servicios de adopción de mascotas, encuentra a tu compañero peludo perfecto</p>
                    <a href="/perritos" class="button">Ver más <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service">
                    <figure><img src="/img/donativos.jpg" alt=""></figure>
                    <h4 class="title">Hacer donativos</h4>
                    <p>Tus donativos nos ayudan a seguir brindando cuidado y atención a los perritos en espera de un hogar amoroso.</p>
                    <a href="/donaciones" class="button">Ver más <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service">
                    <figure><img src="/img/cachorro.png" alt=""></figure>
                    <h4 class="title">Foster to adopt</h4>
                    <p>Nuestro programa de foster to adopt te permite brindar un hogar temporal a un perrito antes de adoptarlo de manera permanente.</p>
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
            <h2>Alianzas estratégicas</h2>
            <p>Somos una organización protectora de animales especializada, desde el 2020, en la ayuda a perros maltratados y/o abandonados.
                Nuestros rescatistas realizan diariamente labores heroicas en un intento por salvar la mayor cantidad de vidas posible; sin embargo,
                su capacidad de dar cobijo, alimento y atención médica, se ve ampliamente rebasada por una problemática que nunca cesa de crecer.</p>
            <div class="alianzas__logos">
                <figure><img src="/img/webflow.png" alt=""></figure>
                <figure><img src="/img/relume.png" alt=""></figure>
                <figure><img src="/img/webflow.png" alt=""></figure>
                <figure><img src="/img/relume.png" alt=""></figure>
            </div>
        </section>

    </div>
    <section id="contact">
        <div class="container">
            <div class="left">
                <h2>Contacto</h2>
                <a href="tel:3314148548"><i class="fas fa-phone"></i> &nbsp; 3314148548</a>
                <a href="mailto:roman@huellitasdiferentes.com"><i class="fas fa-envelope"></i>&nbsp;roman@huellitasdiferentes.com</a>
                <div class="socials">
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <div class="right">
                <form action="">
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