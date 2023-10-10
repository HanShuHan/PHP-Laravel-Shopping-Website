<x-new-layout>
    <x-navbar
        :categories="$categories"
        cartItemsCount="{{$cartItemsCount}}">

    </x-navbar>
    <x-carousel></x-carousel>
    <div class="product-home-container">
        <h1>Newest in Fashion</h1>
        <div class="product-container">
            @for($i = 0; $i < 10; $i++)
                <x-home-products
                    itemPrice="{{$latestFashion[$i]->price}}"
                    itemName="{{$latestFashion[$i]->name}}"
                    itemDescription="{{$latestFashion[$i]->description}}"
                    itemId="{{$latestFashion[$i]->id}}"
                ></x-home-products>
            @endfor
        </div>
    </div>

    <div class="product-home-container">
        <h1>Newest in Electronic</h1>
        <div class="product-container">
            @for($i = 0; $i < 10; $i++)
                <x-home-products
                    itemPrice="{{$latestElectronic[$i]->price}}"
                    itemName="{{$latestElectronic[$i]->name}}"
                    itemDescription="{{$latestElectronic[$i]->description}}"
                    itemId="{{$latestElectronic[$i]->id}}"
                ></x-home-products>
            @endfor
        </div>
    </div>

    <div class="product-home-container">
        <h1>Newest in Jewellery</h1>
        <div class="product-container">
            @for($i = 0; $i < 10; $i++)
                <x-home-products
                    itemPrice="{{$latestJewellery[$i]->price}}"
                    itemName="{{$latestJewellery[$i]->name}}"
                    itemDescription="{{$latestJewellery[$i]->description}}"
                    itemId="{{$latestJewellery[$i]->id}}"
                ></x-home-products>
            @endfor
        </div>
    </div>
</x-new-layout>
