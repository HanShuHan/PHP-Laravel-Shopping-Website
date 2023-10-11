<div class="product-card-small col-md-4 mb-4">
    <div class="card h-100 shadow-sm">
        <a href="/product/{{$itemId}}"><img src="/images/place-holder.png" class="card-img-top" alt="{{ $itemName }}"></a>
        <div class="card-body d-flex flex-column">
            <div class="card-title flex-grow-1">
                <h5><a href="/product/{{$itemId}}" class="product-link text-decoration-none text-dark">{{ $itemName }}</a></h5>
            </div>
            <div class="card-text">
                <p>${{ $itemPrice }}</p>
            </div>
        </div>
    </div>
</div>


