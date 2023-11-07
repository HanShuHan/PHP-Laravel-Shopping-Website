{{--WRITTEN BY DAVID CURREY--}}
<x-new-layout>
    <x-navbar cartItemsCount="{{ $cartItemsCount }}" :categories="$categories"></x-navbar>
    <x-searchbar></x-searchbar>

    <div class="container-fluid mt-5 pt-5">
        <div class="row">
            <!-- Product container -->
            <div class="col-md-9">
                <div class="row">
                    @forelse ($products as $product)
                        <div class="col-md-3 mb-4">
                            <div class="card h-100 d-flex flex-column">
                                <img class="card-img-top" src="{{ asset('storage/' . $product->photo) }}"
                                    alt="{{ $product->name }}">
                                <div class="card-body flex-grow-1">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text mb-3" style="font-size: 0.6em;">{{ $product->description }}</p>
                                </div>
                                <div class="card-footer bg-white mt-auto">
                                    <p class="price mb-1">Price: ${{ $product->price }}</p>
                                    <div class="card-text mb-3 d-flex justify-content-start">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $product->rating)
                                                <span class="material-icons-sharp text-dark">star</span>
                                            @else
                                                <span class="material-icons-sharp text-muted">
                                                    star_border
                                                </span>
                                            @endif
                                        @endfor
                                        <p><em>({{ $product->rating_count }})</em></p>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <a href="{{ url('/product/' . $product->id) }}"
                                            class="btn btn-dark mb-2 me-2">More Info</a>
                                        @auth
                                            <form action="/cart/add/{{ $product->id }}" method="POST"
                                                class="d-inline-block mb-2">
                                                @csrf
                                                <button type="submit" class="btn btn-dark d-flex align-items-center">
                                                    <span class="material-icons-sharp text-white me-2">shopping_cart</span>
                                                </button>
                                            </form>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p>No results.</p>
                        </div>
                    @endforelse

                    <!-- Add pagination -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $products->links('vendor.pagination.pagination') }}
                    </div>

                </div>
            </div>
        </div>
</x-new-layout>
