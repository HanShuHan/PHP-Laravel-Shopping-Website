<x-new-layout>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @foreach($cartItems as $item)
        <div>
            <h3>{{$item->product->name}}</h3>
            <p>{{ $item->product->price }}</p>
            <p>{{ $item->quantity }}</p>
            <form action="/cart/remove/{{$item->id}}" method="POST">
                @csrf
                <button type="submit">Delete Item</button>
            </form>
        </div>
    @endforeach

        <h2>Total: {{ $total }}</h2>
        <a href="/">Continue Shopping</a>
        <form action="/cart/clear" method="POST">
            @csrf
            <button type="submit">Clear Cart</button>
        </form>
</x-new-layout>
