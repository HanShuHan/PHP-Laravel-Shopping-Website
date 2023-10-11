<x-new-layout>
    <x-navbar
        cartItemsCount="{{$cartItemsCount}}">
    </x-navbar>
    <x-searchbar></x-searchbar>
    <x-carousel></x-carousel>
    @foreach ([['title' => 'Newest in Fashion', 'products' => $latestFashion],
              ['title' => 'Newest in Electronics', 'products' => $latestElectronic],
              ['title' => 'Newest in Jewellery', 'products' => $latestJewellery]]
              as $section)
        <div class="product-home-container container my-5">
            <h1 class="mb-4">{{ $section['title'] }}</h1>
            <div class="product-container row">
                @for($i = 0; $i < 9; $i++)
                    <x-home-products
                        itemPrice="{{$section['products'][$i]->price}}"
                        itemName="{{$section['products'][$i]->name}}"
                        itemDescription="{{$section['products'][$i]->description}}"
                        itemId="{{$section['products'][$i]->id}}"
                    ></x-home-products>
                @endfor
            </div>
        </div>
    @endforeach
</x-new-layout>
