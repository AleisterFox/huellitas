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
                                <figure><img src="/images/{{ $product->image }}" alt="" /></figure>
                            </li>

                            @if ($product->image2)
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="/images/{{ $product->image2 }}" alt="" /></figure>
                            </li>
                            @endif
                          
                            @if ($product->image3)
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="/images/{{ $product->image3 }}" alt="" /></figure>
                            </li>
                            @endif

                            @if ($product->image4)
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="/images/{{ $product->image4 }}" alt="" /></figure>
                            </li>
                            @endif

                            @if ($product->image5)
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="/images/{{ $product->image5 }}" alt="" /></figure>
                            </li>
                            @endif
                        </ul>

                        <div class="glide__bullets" data-glide-el="controls[nav]">
                            <button class="glide__bullet" data-glide-dir="=0">
                                <img src="/images/{{ $product->image }}" alt="" />
                            </button>
                            @if ($product->image2)
                            <button class="glide__bullet" data-glide-dir="=1">
                                <img src="/images/{{ $product->image2 }}" alt="" />
                            </button>
                            @endif

                            @if ($product->image3)
                            <button class="glide__bullet" data-glide-dir="=2">
                                <img src="/images/{{ $product->image3 }}" alt="" />
                            </button>
                            @endif

                            @if ($product->image4)
                            <button class="glide__bullet" data-glide-dir="=3">
                                <img src="/images/{{ $product->image4 }}" alt="" />
                            </button>
                            @endif

                            @if ($product->image5)
                            <button class="glide__bullet" data-glide-dir="=4">
                                <img src="/images/{{ $product->image5 }}" alt="" />
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <h2 class="product__name">{{ $product->name }}</h2>
                <p class="price"><strong>${{ $product->price }} MXN</strong></p>
                <p class="product__description">
                    {{ $product->description }}
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
                        <figure><img src="/img/croquetas.jpg" alt="" /></figure>
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

@push('scripts')
<script src="js/cartModal.js"></script>
<script>
    var glide = new Glide("#pet-slider", {
        type: "carousel",
        perView: 1,
        autoplay: 5000,
        animationDuration: 2000,
        animationTimingFunction: "ease-in-out",
    });

    glide.mount();
</script>

<script>
    const inputNumber = document.querySelector('input[type="number"]');
    const incrementButton = document.querySelector(".increment");
    const decrementButton = document.querySelector(".decrement");

    incrementButton.addEventListener("click", function() {
        inputNumber.stepUp();
    });

    decrementButton.addEventListener("click", function() {
        if (inputNumber.value != 0) {
            inputNumber.stepDown();
        }
    });
</script>
@endpush