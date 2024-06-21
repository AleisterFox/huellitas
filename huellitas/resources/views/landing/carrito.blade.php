@extends('layouts.main')

@section('content')
<main>
    <section id="process">
        <div class="steps">
            <p class="active">Carrito<i class="fas fa-chevron-right"></i></p>
            <p>Informacion<i class="fas fa-chevron-right"></i></p>
            <p>Pago<i class="fas fa-chevron-right"></i></p>
            <p>Envío</p>
        </div>
        <div class="container">
            <div class="left">
                <div class="buying__cart">
                    <div class="top">
                        <h3>Tu carrito de compra</h3>
                        <p class="number__articles">1 Artículo</p>
                    </div>

                    <div class="product">
                        <i class="fas fa-x"></i>
                        <figure><img src="img/croquetas.jpg" alt="" /></figure>
                        <div class="product__information">
                            <h3 class="product__name">Nombre del producto</h3>
                            <p class="product__price">$ 0.00 MXN</p>
                            <div class="input-group">
                                <input type="number" value="0" name="Qty" id="Qty" />
                                <button class="decrement">-</button>
                                <button class="increment">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="total__bill">$ 0.00 MXN</div>
                    <a href="/producto" class="back"><i class="fas fa-chevron-left"></i>Volver al producto</a>
                </div>
            </div>
            <div class="right">
                <div class="cart__total">
                    <h2>Total del carrito</h2>
                    <div class="subtotal">
                        <h4>Subtotal</h4>
                        <p class="subtotal__amount">$ 0.00 MXN</p>
                    </div>
                    <div class="total">
                        <h3>Total</h3>
                        <p class="total__amount">$ 0.00 MXN</p>
                    </div>
                    <a href="/informacion" class="button">Finalizar Compra</a>
                    <div class="cart__bottom">
                        <p><i class="fas fa-shield"></i>Compra segura</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection