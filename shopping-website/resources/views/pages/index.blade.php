<x-layout>
    <div class="banner_bg_main">
        {{--See header.blade.php to Edit this--}}
        <x-header></x-header>

        <!-- header section start -->
        <div class="header_section">
            <div class="container">
                <div class="container_main">
                    {{--Side Nav--}}
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="/">Home</a>
                        <!-- <a href="fashion.html">Fashion</a>
                        <a href="electronic.html">Electronic</a>
                        <a href="jewellery.html">Jewellery</a> -->
                    </div>
                    <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                    {{--End Side Nav--}}

                    {{--See category-dropdown.blade.php for dropdown menu--}}
                    <x-category-dropdown></x-category-dropdown>

                    {{--See searchbar.blade.php to Edit this--}}
                    <x-searchbar></x-searchbar>

                    {{--See user-control.blade.php to Edit this, this has cart and login button--}}
                    <x-user-control></x-user-control>
                </div>
            </div>
        </div>

{{--        WILL REFACTOR CAROUSELS WHEN DB SET UP--}}
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital"><span class="discount-label">SALE 15% OFF</span><br>Your favorite shoping</h1>
                                    <div class="buynow_bt"><a href="#">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital"><span class="discount-label">SALE 25% OFF</span><br>Your favorite shoping</h1>
                                    <div class="buynow_bt"><a href="#">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital"><span class="discount-label">SALE 30% OFF</span><br>Your favorite shoping</h1>
                                    <div class="buynow_bt"><a href="#">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- banner bg main end -->
    <!-- fashion section start -->
    <div class="fashion_section fashion-section category">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Man & Woman Fashion</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Man T -shirt</h4>
                                        <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Man -shirt</h4>
                                        <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Woman Scart</h4>
                                        <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="images/women-clothes-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Man & Woman Fashion</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Man T -shirt</h4>
                                        <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Man -shirt</h4>
                                        <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Woman Scart</h4>
                                        <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="images/women-clothes-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Man & Woman Fashion</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Man T -shirt</h4>
                                        <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Man -shirt</h4>
                                        <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Woman Scart</h4>
                                        <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                        <div class="tshirt_img"><img src="images/women-clothes-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <!-- fashion section end -->
    <!-- electronic section start -->
    <div class="fashion_section electronic-section category">
        <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Electronic</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Laptop</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="images/laptop-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Mobile</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="images/mobile-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Computers</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="images/computer-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Electronic</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Laptop</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="images/laptop-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Mobile</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="images/mobile-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Computers</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="images/computer-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Electronic</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Laptop</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="images/laptop-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Mobile</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="images/mobile-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Computers</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="electronic_img"><img src="images/computer-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <!-- electronic section end -->
    <!-- jewellery  section start -->
    <div class="jewellery_section jewellery-section category">
        <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Jewellery Accessories</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Jumkas</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Necklaces</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Kangans</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="images/kangan-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Jewellery Accessories</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Jumkas</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Necklaces</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Kangans</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="images/kangan-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Jewellery Accessories</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Jumkas</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Necklaces</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Kangans</h4>
                                        <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="images/kangan-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <!-- jewellery  section end -->
    <x-copyright></x-copyright>
    <!-- footer section start -->
    <!-- <div class="footer_section layout_padding">
       <div class="container">
          <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
          <div class="input_bt">
             <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
             <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
          </div>
          <div class="footer_menu">
             <ul>
                <li><a href="#">Best Sellers</a></li>
                <li><a href="#">Gift Ideas</a></li>
                <li><a href="#">New Releases</a></li>
                <li><a href="#">Today's Deals</a></li>
                <li><a href="#">Customer Service</a></li>
             </ul>
          </div>
          <div class="location_main">Help Line  Number : <a href="#">+1 1800 1200 1200</a></div>
       </div>
    </div> -->
    <!-- footer section end -->
</x-layout>
