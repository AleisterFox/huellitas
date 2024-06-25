<header>
  <nav>
    <a href="/">
      <picture>
        <source media="(max-width: 768px)" srcset="img/logo.jpg" />
        <img src="img/logo.jpg" alt="" />
      </picture>
    </a>

    <ul class="menu">
      @if (auth()->check())
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
      @endif
      <li><a href="/">Historia</a></li>
      <li><a href="/perritos">Mascotas</a></li>
      <li><a href="/donaciones">Donaciones</a></li>
      <li><a href="/adopciones">Foster to adopt</a></li>
      <li><a href="/contacto" class="button">Contacto</a></li>
      <li class="shop-cart">
        <a href="/carrito"><i class="fas fa-bag-shopping"></i></a>
        <p class="number__of--articles">1</p>
      </li>
    </ul>
    <a><i class="fa-solid fa-bars menu__button"></i></a>
  </nav>
</header>