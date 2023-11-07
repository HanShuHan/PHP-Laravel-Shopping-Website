<x-new-layout>
  <x-navbar cartItemsCount="{{$cartItemsCount}}" :categories="$categories"></x-navbar>
    @if (session('success'))
        <div class="container d-flex justify-content-center align-items-center mt-5">
            <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <x-searchbar></x-searchbar>
    <x-carousel></x-carousel>

    @foreach ([['title' => 'Under $20', 'products' => $under20],
              ['title' => 'Highest Rated', 'products' => $highestRated],
              ['title' => 'Newest in Dry Goods', 'products' => $latestDryGoods],
              ['title' => 'Newest Supplies', 'products' => $latestSupplies]]
              as $section)
        <div class="product-home-container container my-5">
            <h1 class="mb-4">{{ $section['title'] }}</h1>
            <div class="product-container row">
                @for($i = 0; $i < 6; $i++)
                    <x-home-products
                        itemPrice="{{$section['products'][$i]->price}}"
                        itemName="{{$section['products'][$i]->name}}"
                        itemDescription="{{$section['products'][$i]->description}}"
                        itemId="{{$section['products'][$i]->id}}"
                        itemRating="{{$section['products'][$i]->rating}}"
                        itemRatingCount="{{$section['products'][$i]->rating_count}}"
                        test="Hello World!"

                    ></x-home-products>
                @endfor

            </div>
        </div>
    @endforeach
</x-new-layout>
