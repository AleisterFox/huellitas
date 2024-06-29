@use('App\Services\CartService')
<div class="left">
    <div class="buying__cart">
        <div class="top">
            <h3>Tu carrito de compra</h3>
            <p class="number__articles">{{ CartService::getCount() }} Artículo{{ CartService::getCount() > 1 ? 's' : '' }}</p>
        </div>

        @foreach(CartService::getProducts() as $product)
        <div class="product" style="margin-bottom: 10px;">
            <i class="fas fa-x removeProduct" data-id="{{ $product['product']->id }}"></i>
            <figure>
                <img src="/images/{{ $product['product']->image }}" alt="Imagen" />
            </figure>
            <div class="product__information">
                <h3 class="product__name">{{ $product['product']->name }}</h3>
                <p class="product__price">$ {{ $product['product']->price }} MXN</p>
                <div class="input-group">
                    <input type="number" name="Qty" value="{{ $product['quantity'] }}" class="product-quantity" data-id="{{ $product['product']->id }}" />
                    <button class="decrement" data-id="{{ $product['product']->id }}">-</button>
                    <button class="increment" data-id="{{ $product['product']->id }}">+</button>
                </div>
            </div>
        </div>
        @endforeach
        <div class="total__bill">$ {{ CartService::getTotal() }} MXN</div>
        <a href="/" class="back"><i class="fas fa-chevron-left"></i>Volver al producto</a>
    </div>
</div>