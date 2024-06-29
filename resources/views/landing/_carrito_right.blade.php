@use('App\Services\CartService')
<div class="right">
    <div class="cart__total">
        <h2>Total del carrito</h2>
        <div class="subtotal">
            <h4>Subtotal</h4>
            <p class="subtotal__amount">$ {{ CartService::getTotal() }} MXN</p>
        </div>
        <div class="total">
            <h3>Total</h3>
            <p class="total__amount">$ {{ CartService::getTotal() }} MXN</p>
        </div>
        <a href="/informacion" class="button">Finalizar Compra</a>
        <div class="cart__bottom">
            <p><i class="fas fa-shield"></i>Compra segura</p>
        </div>
    </div>
</div>