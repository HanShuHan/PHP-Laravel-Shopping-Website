<x-new-layout>
    <x-navbar
        cartItemsCount="{{$cartItemsCount}}">

    </x-navbar>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1>{{$product->name}}</h1>
    <p>{{$product->description}}</p>
    <form action="/cart/add/{{$product->id}}" method="POST">
        @csrf
        <button type="submit">Add To Cart</button>
    </form>
    <p>${{$product->price}}</p>
    <p>{{$category}}</p>
</x-new-layout>
