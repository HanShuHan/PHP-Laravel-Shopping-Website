{{--WRITTEN BY DAVID CURREY, MODIFIED FOR LARAVEL BY MICHAEL BOISVENU-LANDRY--}}
<x-new-layout>
    <x-navbar cartItemsCount="{{$cartItemsCount}}"></x-navbar>

    <div class="container-fluid mt-5 pt-5">
        <div class="row">
            <!-- Sidebar with product categories -->
            <div class="col-md-3">
                <div class="list-group">
                    <h2 class="menu-header">Categories</h2>
                    <a href="{{ route('product.listItems', 'all') }}" class="list-group-item list-group-item-action">All Products</a>
                    @foreach($categories as $category)
                        <a href="{{ route('product.listItems', $category->name) }}" class="list-group-item list-group-item-action">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>

            <!-- Product container -->
            <div class="col-md-9">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{ asset('images/place-holder.png') }}" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text" style="font-size: 0.9em;">{{ $product->description }}</p>
                                    <p class="price">Price: ${{ $product->price }}</p>
                                    <a href="{{ url('/product/'.$product->id) }}" class="btn btn-dark mb-2">More Info</a>
                                    <form action="/cart/add/{{$product->id}}" method="POST" class="d-inline-block">
                                        @csrf
                                        <button type="submit" class="btn btn-primary d-flex align-items-center">
                                            <span class="material-icons-sharp text-white me-2">shopping_cart</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Add pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</x-new-layout>




