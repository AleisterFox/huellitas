<table class="table">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->products as $product)
        <tr>
            <td><img src="/images/{{ $product->image }}" alt="Imagen" style="width: 30px;" /></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->pivot->quantity }}</td>
            <td>{{ $product->pivot->quantity * $product->pivot->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>