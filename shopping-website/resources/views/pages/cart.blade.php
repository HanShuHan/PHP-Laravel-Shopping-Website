<x-new-layout>
    <x-navbar cartItemsCount="{{ sizeof($cartItems) }}"></x-navbar>

    <div class="container mt-5 pt-5">
        <div class="text-left">
            <h1 class="mt-4 mb-4">Your Cart</h1>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="mt-4">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cartItems as $item)
                    <tr class="{{ $loop->iteration % 2 == 0 ? 'table-secondary' : '' }}">
                        <td>{{$item->product->name}}</td>
                        <td>{{ $item->product->price }}</td>
                        <td>
                            <select>
                                @for ($i = 1; $i <= 20; $i++)
                                    <option value="{{ $i }}" @if($i == $item->quantity) selected @endif>{{ $i }}</option>
                                @endfor
                            </select>
                        </td>
                        <td>
                            <form action="/cart/remove/{{$item->id}}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-dark">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <h4>Total: ${{ $total }}</h4>
            <div>
                <a href="/" class="btn btn-dark me-2">Continue Shopping</a>
                <form action="/cart/clear" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Clear Cart</button>
                </form>
            </div>
        </div>
    </div>
</x-new-layout>



