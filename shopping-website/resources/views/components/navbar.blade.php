<nav class="navbar fixed-top navbar-expand-xl navbar-dark bg-dark mb-5 py-2 px-1">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><em>sHopper</em></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse show" id="navbarDark">
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">New Releases</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Shop
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/products/all">All Products</a></li>
                        <li><a class="dropdown-item" href="/products/Produce">Produce</a></li>
                        <li><a class="dropdown-item" href="/products/Dry%20Goods">Dry Goods</a></li>
                        <li><a class="dropdown-item" href="/products/Baking%20Supplies">Baking Supplies</a></li>
                        <li><a class="dropdown-item" href="/products/Cooking%20Supplies">Cooking Supplies</a></li>
                        <li><a class="dropdown-item" href="/products/Coffees%20And%20Teas">Coffee & Teas</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Support</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item me-3">
                        <a href="/cart" class="btn btn-outline-light d-flex align-items-center cart-button">
                            <span class="material-icons-sharp text-white me-2">shopping_cart</span>
                            Cart <span id="cart-items-count" class="badge bg-secondary ms-2">{{$cartItemsCount}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/profile" class="btn btn-outline-light d-flex align-items-center account-button">
                            <span class="material-icons-sharp text-white me-2">account_circle</span>
                            My Account
                        </a>
                    </li>
                @else
                    <li class="nav-item me-3">
                        <a href="/login" class="btn btn-outline-light d-flex align-items-center login-button">
                            <span class="material-icons-sharp text-white me-2">account_circle</span>
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/signup" class="btn btn-outline-light d-flex align-items-center register-button">
                            <span class="material-icons-sharp text-white me-2">person_add</span>
                            Register
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

