<style>
    .carousel-control-prev, .carousel-control-next {
        color: #343a40; /* Bootstrap 5's .text-dark color */
    }

    .carousel-control-prev-icon, .carousel-control-next-icon {
        filter: invert(1); /* Invert the colors of the icons */
    }
    .carousel-indicators button {
        background-color: #798794; /* Bootstrap 5's .bg-dark color */
        border-color: #798794; /* Bootstrap 5's .bg-dark color */
        width: 12px;
        height: 8px;

    }

    .carousel-indicators .active {
        background-color: #343a40; /* Bootstrap 5's .bg-warning color */
        border-color: #343a40; /* Bootstrap 5's .bg-warning color */
    }

    .carousel-inner .carousel-item img {
        height: 400px;
        width: auto;
    }

    .carousel-caption {
        color: #343a40; /* Bootstrap 5's .text-dark color */
    }
</style>

<div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner text-center">
        <div class="carousel-item active">
            <img src="/images/place-holder.png" class="mx-auto d-block" alt="...">
            <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                <div>
                    <h5>NEW KITCHEN ITEMS</h5>
                    <p>Check out our new collection of things for your kitchen!</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/images/place-holder.png" class="mx-auto d-block" alt="...">
            <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                <div>
                    <h5>15% OFF WOMEN'S WINTER WEAR</h5>
                    <p>Don't miss out on this flash sale!</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/images/place-holder.png" class="mx-auto d-block" alt="...">
            <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                <div>
                    <h5>FREE SHIPPING ON ORDERS ABOVE $300</h5>
                    <p>Buy in bulk and save!</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


