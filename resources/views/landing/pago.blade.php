@extends('layouts.main')

@section('content')
<main>
    <section id="process">
        <div class="steps">
            <p>Carrito<i class="fas fa-chevron-right"></i></p>
            <p>Informacion<i class="fas fa-chevron-right"></i></p>
            <p class="active">Pago<i class="fas fa-chevron-right"></i></p>
            <p>Envío</p>
        </div>
        <div class="container">
            <div class="left">
                <div class="buying__cart">
                    <div class="top">
                        <h3>Información</h3>
                    </div>
                    <div class="customer__info">
                        <p class="customer__name">
                            <strong>Nombre de la persona</strong>
                        </p>
                        <p class="customer__address">Información de la dirección</p>
                        <p class="customer__state">Estado</p>
                        <p class="customer__city">Ciudad</p>
                        <a href="">Cambiar</a>
                    </div>
                </div>
                <div class="buying__cart">
                    <div class="top">
                        <h3>Selecciona método de pago</h3>
                    </div>

                    <div class="payment">
                        <p>En Mercado Pago no es necesario crear una cuenta.</p>
                        <form action="">
                            <div class="payment__method">
                                <div class="option">
                                    <input type="radio" name="payment" id="mercado" />
                                    <label for="mercado">Mercado Pago</label>
                                </div>
                                <div class="logos">
                                    <figure><img src="img/mercado.png" alt=""></figure>
                                    <figure><img src="img/visa.png" alt=""></figure>
                                    <figure><img src="img/master.png" alt=""></figure>
                                    <figure><img src="img/amex.png" alt=""></figure>
                                </div>
                            </div>
                            <div class="payment__method">
                                <div class="option">
                                    <input type="radio" name="payment" id="paypal" />
                                    <label for="paypal">Paypal</label>
                                </div>
                                <div class="logos">
                                    <figure><img src="img/paypal.png" alt=""></figure>
                                </div>
                            </div>
                            <div class="payment__method">
                                <div class="option">
                                    <input type="radio" name="payment" id="transferencia" />
                                    <label for="transferencia">Transferencia electrónica referenciada</label>
                                </div>
                                <div class="logos">
                                    <figure><img src="img/spei.png" alt=""></figure>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="bottom">
                        <a href="/informacion" class="back"><i class="fas fa-chevron-left"></i>Volver al producto</a>
                        <a href="/envio" class="button">Continuar</a>
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