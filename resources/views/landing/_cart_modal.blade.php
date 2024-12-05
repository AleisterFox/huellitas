@use('App\Services\CartService')
<div class="products">
    @foreach(CartService::getProducts() as $product)
        <div class="product">
            <div class="product__info">
                <i class="fas fa-x delete__product" data-id="{{ $product['product']->id }}"></i>
                <figure>
                    <img src="{{ asset('/images/' . $product['product']->image) }}" alt="Imagen" />
                </figure>
                <p class="product__name">{{ $product['product']->name }}</p>
            </div>
            <p class="product__price">$ {{ $product['product']->price }} MXN</p>
        </div>
    @endforeach
</div>
<div class="subtotal">
    <h4>Subtotal</h4>
    <p class="subtotal__amount">$ {{ CartService::getTotal() }} MXN</p>
</div>
<div class="total">
    <h3>Total</h3>
    <p class="total__amount">$ {{ CartService::getTotal() }} MXN</p>
</div>