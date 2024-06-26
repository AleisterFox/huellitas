<div class="product">
    <figure>
        <img src="/images/{{ $product->image }}" alt="">
    </figure>
    <h4>{{ $product->name }}</h4>
    <p>{{ $product->description }}</p>
    <a href="/producto/{{ $product->id }}">Ver producto &nbsp; <i class="fas fa-arrow-right"></i></a>
</div>