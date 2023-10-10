<nav class="navbar-container">
    <div class="navbar-top">
        <ul>
            <li><a href="#">Best Sellers</a></li>
            <li><a href="#">Gift Ideas</a></li>
            <li><a href="#">New Releases</a></li>
            <li><a href="#">Today's Deals</a></li>
        </ul>
    </div>
    <div class="navbar-bottom">
        <form action="/">
            <input type="text" name="search" id="searchBar">
            <button type="submit">Search</button>
        </form>
        <ul class="nav-user-control">
            @auth
                <li><span class="fa fa-shopping-cart"></span><a href="/cart">Cart</a> {{$cartItemsCount}}</li>
                <li><span class="fa fa-user-circle"></span><a href="/profile">My Account</a></li>
            @else
                <li><span class="fa fa-user-circle"></span><a href="/login">Login</a></li>
                <li><a href="/signup">Register</a></li>
            @endauth
        </ul>
    </div>
</nav>
