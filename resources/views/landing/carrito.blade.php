@extends('layouts.main')

@section('content')
@use('App\Services\CartService')
<main>
    <section id="process">
        <div class="steps">
            <p class="active">Carrito<i class="fas fa-chevron-right"></i></p>
            <p>Informacion<i class="fas fa-chevron-right"></i></p>
            <p>Pago<i class="fas fa-chevron-right"></i></p>
            <p>Envío</p>
        </div>
        <div class="container" id="carrito-container">
            @include('landing._carrito_left')
            @include('landing._carrito_right')
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(".removeProduct").on("click", function() {
        const id = $(this).data("id");
        $.ajax({
            url: "/remove-from-cart",
            method: "POST",
            data: {
                product_id: id,
                "_token": "{{ csrf_token() }}",
            },
            success: function(response) {
                location.reload();
            }
        });
    });

    function updateCard(product_id, quantity) {
        $.ajax({
            url: "/update-cart",
            method: "POST",
            data: {
                product_id: product_id,
                quantity: quantity,
                "_token": "{{ csrf_token() }}",
            },
            success: function(response) {
                $("#carrito-container").html(response);
            }
        });
    }

    $(document).on("input", ".product-quantity", function() {
        updateCard($(this).data("id"), $(this).val());
    });

    $(document).on('click', ".increment", function() {
        let inputNumber = $(this).siblings('input[type="number"]');
        inputNumber.val(parseInt(inputNumber.val()) + 1);
        updateCard($(this).data("id"), inputNumber.val());
    });

    $(document).on('click', ".decrement", function() {
        let inputNumber = $(this).siblings('input[type="number"]');
        if (parseInt(inputNumber.val()) > 1) {
            inputNumber.val(parseInt(inputNumber.val()) - 1);
            updateCard($(this).data("id"), inputNumber.val());
        }
    });
</script>
@endpush