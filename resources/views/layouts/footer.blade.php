@use('App\Models\LadingPageConfig')
@php
    $instance = LadingPageConfig::getInstance();
@endphp
<footer>
    <div class="top">
        <a href="#hero">
            <figure>
                <img src="/img/logo.jpg" alt="" />
            </figure>
        </a>
        <ul>
            <li><a href="/#hero">Historia</a></li>
            <li>
                <a href="/perritos">Mascotas</a>
                <ul>
                    <li><a href="/perritos">Mestizos</a></li>
                    <li><a href="/perritos">Chihuahuas</a></li>
                </ul>
            </li>
            <li><a href="/donaciones">Donaciones</a></li>
            <li><a href="/adopciones">Foster to adopt</a></li>
            <li>
                <a href="/contacto" class="button">Contacto</a>
                <div class="links">
                    <a href="tel: {{ $instance->contact_phone }}" target="_blank"><i class="fas fa-phone"></i> {{ $instance->contact_phone }}</a>
                    <a href="mailto: {{ $instance->contact_email }}" target="_blank"><i class="fas fa-envelope"></i>{{ $instance->contact_email }}</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="middle">
        <div class="socials">
            <a href="{{ $instance->contact_facebook }}" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="{{ $instance->contact_instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</footer>