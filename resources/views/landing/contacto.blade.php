@extends('layouts.main')

@section('content')
<main>
    <section id="contact-page">
        <figure>
            <img src="img/contact.jpg" alt="" />
        </figure>
        <section id="contact">
            <div class="container">
                <div class="left">
                    @session('message')
                        @include('layouts._alert', ['message' => $value])
                    @endsession
                    <h2>Contacto</h2>
                    <a href="tel:3314148548"><i class="fas fa-phone"></i> &nbsp; 3314148548</a>
                    <a href="mailto:roman@huellitasdiferentes.com"><i class="fas fa-envelope"></i>&nbsp;roman@huellitasdiferentes.com</a>
                    <div class="socials">
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="right">
                    <form action="{{ route('contacto.store') }}" method="post">
                        @csrf
                        <input type="text" name="name" id="name" placeholder="Nombre*" required />
                        <input type="tel" name="phone" id="phone" placeholder="Tel." />
                        <input type="email" name="email" id="email" placeholder="Email*" required />
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
                        <button type="submit" class="button">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
    </section>
</main>

@endsection