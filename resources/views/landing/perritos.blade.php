@extends('layouts.main')

@section('content')
<main>
    <section id="portada-perritos">
        <figure><img src="img/collie.jpg" alt=""></figure>
        <h1>¡Descubre a tu próximo compañero!</h1>
    </section>
    <section id="perritos">
        <div class="content">
            <div class="filters">
                <h3>Filtros</h3>
                <form action="">
                    <div class="dog-type">
                        <label for="option1">Todos</label>
                        <input type="checkbox" name="" id="option1" checked>
                    </div>
                    <div class="dog-type">
                        <label for="option2">Mestizos</label>
                        <input type="checkbox" name="" id="option2">
                    </div>
                    <div class="dog-type">
                        <label for="option3">Chihuahuas</label>
                        <input type="checkbox" name="" id="option3">
                    </div>
                </form>
            </div>
            <div class="perritos-container">
                <a href="/adoptar" class="doggy">
                    <figure><img src="img/agata.jpg" alt=""></figure>
                    <h4>agata</h4>
                </a>
                <a href="/adoptar" class="doggy">
                    <figure><img src="img/drako.jpg" alt=""></figure>
                    <h4>drako</h4>
                </a>
                <a href="/adoptar" class="doggy">
                    <figure><img src="img/eros.jpg" alt=""></figure>
                    <h4>eros</h4>
                </a>
                <a href="/adoptar" class="doggy">
                    <figure><img src="img/tony.jpg" alt=""></figure>
                    <h4>tony</h4>
                </a>
                <a href="/adoptar" class="doggy">
                    <figure><img src="img/daisy.jpg" alt=""></figure>
                    <h4>daisy</h4>
                </a>
            </div>
        </div>

        <div class="donation-banner">
            <figure><img src="img/perritos-vector.png" alt=""></figure>
            <h2>¿Deseas apoyarnos en nuestra noble misión?</h2>
            <a href="/donaciones" class="button__secondary">Hacer Donativo</a>
        </div>
    </section>
</main>
@endsection