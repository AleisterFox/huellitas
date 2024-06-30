@extends('layouts.main')


@section('content')
<main>
    <section id="process">
        <div class="steps">
            <p>Carrito<i class="fas fa-chevron-right"></i></p>
            <p class="active">Informacion<i class="fas fa-chevron-right"></i></p>
            <p>Pago<i class="fas fa-chevron-right"></i></p>
            <p>Envío</p>
        </div>
        <div class="container">
            <div class="left">
                <div class="buying__cart">
                    <div class="top">
                        <h3>Información</h3>
                    </div>

                    <div class="customer__info">
                        <form id="orderForm" action="{{ route('order.store') }}" method="post">
                            @csrf
                            <input type="text" name="name" id="name" placeholder="Nombre" required />
                            <input type="text" name="last_name" id="lastname" placeholder="Apellido" required />
                            <input type="tel" name="phone" id="phone" placeholder="Teléfono" required />
                            <input type="email" name="email" id="email" placeholder="Email" required />
                            <input type="text" name="address" id="address" placeholder="Dirección (Incluyendo colonia, número, piso, etc.)" required />
                            <select name="state" id="state">
                                <option value="javascript:void(0);">Estado</option>
                            </select>
                            <input type="text" name="city" id="city" placeholder="Ciudad" required />
                            <input type="number" name="zip" id="postalCode" placeholder="Código Postal" required />
                        </form>
                    </div>

                    <div class="bottom">
                        <a href="/carrito" class="back"><i class="fas fa-chevron-left"></i>Volver al producto</a>
                        <button form="orderForm" class="button">Continuar</button>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="cart__total">
                    <h2>Total del carrito</h2>
                    <div class="subtotal">
                        <p>Subtotal</p>
                        <p class="subtotal__amount">$ 0.00 MXN</p>
                    </div>
                    <div class="gastos__envio">
                        <p>Calculando gastos de envío</p>
                        <p class="subtotal__amount">$ 0.00 MXN</p>
                    </div>
                    <div class="total">
                        <h3>Total</h3>
                        <p class="total__amount">$ 0.00 MXN</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
    const estadosMexicanos = [
        "Aguascalientes",
        "Baja California",
        "Baja California Sur",
        "Campeche",
        "Chiapas",
        "Chihuahua",
        "Coahuila",
        "Colima",
        "Ciudad de México",
        "Durango",
        "Guanajuato",
        "Guerrero",
        "Hidalgo",
        "Jalisco",
        "Estado de México",
        "Michoacán",
        "Morelos",
        "Nayarit",
        "Nuevo León",
        "Oaxaca",
        "Puebla",
        "Querétaro",
        "Quintana Roo",
        "San Luis Potosí",
        "Sinaloa",
        "Sonora",
        "Tabasco",
        "Tamaulipas",
        "Tlaxcala",
        "Veracruz",
        "Yucatán",
        "Zacatecas",
    ];

    const select = document.getElementById("state");

    estadosMexicanos.forEach((estadoMexicano, index) => {
        const option = document.createElement("option");
        option.text = estadoMexicano;
        option.value = index + 1;
        select.add(option);
    });
</script>
@endpush