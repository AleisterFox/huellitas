@extends('layouts.main')

@section('content')
<main>
    <section id="mascota">
        <div class="container">
            <div class="left">
                <div class="glide product-slider" id="pet-slider">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="img/croquetas.jpg" alt="" /></figure>
                            </li>
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="img/croquetas.jpg" alt="" /></figure>
                            </li>
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="img/croquetas.jpg" alt="" /></figure>
                            </li>
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="img/croquetas.jpg" alt="" /></figure>
                            </li>
                        </ul>

                        <div class="glide__bullets" data-glide-el="controls[nav]">
                            <button class="glide__bullet" data-glide-dir="=0">
                                <img src="img/croquetas.jpg" alt="" />
                            </button>
                            <button class="glide__bullet" data-glide-dir="=1">
                                <img src="img/croquetas.jpg" alt="" />
                            </button>
                            <button class="glide__bullet" data-glide-dir="=2">
                                <img src="img/croquetas.jpg" alt="" />
                            </button>
                            <button class="glide__bullet" data-glide-dir="=3">
                                <img src="img/croquetas.jpg" alt="" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <h2 class="product__name">Nombre del producto</h2>
                <p class="price"><strong>$0.00 MXN</strong></p>
                <p class="product__description">
                    Ágata, una perrita de 5 años, fue rescatada después de pasar15
                    días en la caseta de seguridad de un fraccionamiento. A pesar de
                    buscar a su familia sin éxito, nadie la reclamó. Ante la amenaza
                    de ser llevada a la perrera, Ágata llegó a nuestro refugio. Su
                    personalidad tranquila y amorosa la convierte en una compañera
                    perfecta para otros perros y niños. Ahora, con nosotros, Ágata ha
                    encontrado un refugio lleno de amor y estabilidad, lejos de la
                    incertidumbre que alguna vez la rodeó.
                </p>
                <div class="input-group">
                    <input type="number" value="0" name="Qty" id="Qty" />
                    <button class="decrement">-</button>
                    <button class="increment">+</button>
                </div>
                <div class="buttons">
                    <a href="/carrito" class="button">Comprar</a>
                    <a href="javascript:void(0);" class="button add__product">Agregar al carrito</a>
                </div>
            </div>
        </div>
    </section>
    <div class="cart__modal cart__modal--active">
        <div class="cart__modal--container">
            <div class="close__modal">
                <i class="fas fa-x"></i>
            </div>
            <h2>Carrito de compra</h2>
            <div class="products">
                <div class="product">
                    <div class="product__info">
                        <i class="fas fa-x delete__product"></i>
                        <figure><img src="img/croquetas.jpg" alt="" /></figure>
                        <p class="product__name">Nombre del producto</p>
                    </div>
                    <p class="product__price">$ 0.00 MXN</p>
                </div>
            </div>
            <div class="subtotal">
                <h4>Subtotal</h4>
                <p class="subtotal__amount">$ 0.00 MXN</p>
            </div>
            <div class="total">
                <h3>Total</h3>
                <p class="total__amount">$ 0.00 MXN</p>
            </div>
            <a href="informacion" class="button">Finalizar Compra</a>
            <div class="cart__bottom">
                <a href="javascript:void(0)" class="keep__buying">Seguir comprando</a>
                <p><i class="fas fa-shield"></i>Compra segura</p>
            </div>
        </div>
    </div>
</main>

@endsection