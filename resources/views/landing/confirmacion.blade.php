@extends('layouts.main')

@section('content')

<main>
    <section id="process">
        <div class="steps">
            <!-- <p>Carrito<i class="fas fa-chevron-right"></i></p>
          <p>Informacion<i class="fas fa-chevron-right"></i></p>
          <p class="active">Pago<i class="fas fa-chevron-right"></i></p>
          <p>Envío</p> -->
        </div>
        <div class="container">
            <div class="left">
                <div class="buying__cart">
                    <div class="top">
                        <h3> <span><i class="fas fa-check"></i></span> Pedido realizado con éxito</h3>
                    </div>
                    <div class="confirmation__info">
                        <p>Se enviará la confirmación a tu email.</p>
                        <p><strong>Enviando a Nombre de la persona,</strong> Datos y direccion de envío.</p>
                        <p><strong>Fecha aprox de entrega:</strong>Fecha de entrega estimada</p>
                    </div>
                    <div class="bottom conf">
                        <a href="/#products" class="button">Continuar comprando</a>
                    </div>
                </div>

            </div>
            <div class="right">
                <div class="cart__total">
                    <h2>Total del carrito</h2>
                    <div class="subtotal">
                        <p>Subtotal</p>
                        <p class="subtotal__amount">$ 0.00MXN</p>
                    </div>
                    <div class="gastos__envio">
                        <p>Calculando gastos de envío</p>
                        <p class="subtotal__amount">$ 0.00MXN</p>
                    </div>
                    <div class="total">
                        <h3>Total</h3>
                        <p class="total__amount">$ 0.00MXN</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection