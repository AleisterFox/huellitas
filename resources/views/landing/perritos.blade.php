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
                    @foreach($categories as $category)
                    <div class="dog-type">
                        <label for="option2">{{ $category->name }}</label>
                        <input type="checkbox" name="" id="option2">
                    </div>
                    @endforeach
                </form>
            </div>
            <div class="perritos-container">
                @foreach($pets as $pet)
                    <a href="/adoptar" class="doggy">
                        <figure><img src="img/agata.jpg" alt=""></figure>
                        <h4>{{ $pet->name }}</h4>
                    </a>
                @endforeach
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