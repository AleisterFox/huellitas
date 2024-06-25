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
                        <input type="checkbox" id="default-category" class="category-checkbox" value="0" checked>
                    </div>
                    @foreach($categories as $category)
                    <div class="dog-type">
                        <label for="option2">{{ $category->name }}</label>
                        <input type="checkbox" class="category-checkbox" value="{{ $category->id }}">
                    </div>
                    @endforeach
                </form>
            </div>
            <div class="perritos-container">
                @each('landing._perrito', $pets, 'pet')
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

@push('scripts')
    <script>
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
                url: '/perritos',
                method: 'POST',
                data: {
                    categories: categories
                },
                success: function(data) {
                    $('.perritos-container').html(data);
                }
            });
        });
    </script>
@endpush