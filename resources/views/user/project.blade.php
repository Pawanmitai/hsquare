@extends('user.master')

@section('css-add')
@endsection

@section('body')

  <!-- Utilize Cart Menu Start -->
  <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/1.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Wheel Bearing Retainer</a></h6>
                        <span class="mini-cart-quantity">1 x $65.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/2.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">3 Rooms Manhattan</a></h6>
                        <span class="mini-cart-quantity">1 x $85.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/3.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">OE Replica Wheels</a></h6>
                        <span class="mini-cart-quantity">1 x $92.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/4.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Shock Mount Insulator</a></h6>
                        <span class="mini-cart-quantity">1 x $68.00</span>
                    </div>
                </div>
            </div>
            <div class="mini-cart-footer">
                <div class="mini-cart-sub-total">
                    <h5>Subtotal: <span>$310.00</span></h5>
                </div>
                <div class="btn-wrapper">
                    <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                    <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>

        </div>
    </div>
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home Style 01</a></li>
                            <li><a href="index-2.html">Home Style 02</a></li>
                            <li><a href="index-3.html">Home Style 03</a></li>
                            <li><a href="index-4.html">Home Style 04</a></li>
                            <li><a href="index-5.html">Home Style 05  <span class="menu-item-badge">video</span></a></li>
                            <li><a href="index-6.html">Home Style 06</a></li>
                            <li><a href="index-7.html">Home Style 07</a></li>
                            <li><a href="index-8.html">Home Style 08</a></li>
                            <li><a href="index-9.html">Home Style 09</a></li>
                            <li><a href="index-10.html">Home Style 10 <span class="menu-item-badge">Map</span></a></li>
                            <li><a href="index-11.html">Home Style 11</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="service.html">Services</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="locations.html">Google Map Locations</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop-grid.html">Shop Grid</a></li>
                            <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                            <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                            <li><a href="{{url_helper('project-detail')}}">Shop details </a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="order-tracking.html">Order Tracking</a></li>
                            <li><a href="account.html">My Account</a></li>
                            <li><a href="login.html">Sign in</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </li>
                    <li><a href="#">News</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">News</a></li>
                            <li><a href="blog-grid.html">News Grid</a></li>
                            <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                            <li><a href="blog-details.html">News details</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="service.html">Services</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="history.html">History</a></li>
                            <li><a href="appointment.html">Appointment</a></li>
                            <li><a href="locations.html">Google Map Locations</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                <ul>
                    <li>
                        <a href="account.html" title="My Account">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                            My Account
                        </a>
                    </li>
                    <li>
                        <a href="wishlist.html" title="Wishlist">
                            <span class="utilize-btn-icon">
                                <i class="far fa-heart"></i>
                                <sup>3</sup>
                            </span>
                            Wishlist
                        </a>
                    </li>
                    <li>
                        <a href="cart.html" title="Shoping Cart">
                            <span class="utilize-btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                                <sup>5</sup>
                            </span>
                            Shoping Cart
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__contact-address-area mb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <!--<h1 class="page-title">Contact Us</h1>-->
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Projects</li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <!-- BREADCRUMB AREA END -->
    
    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ltn__shop-options">
                        <ul class="justify-content-start">
                            <li>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-none">
                               <div class="showing-product-number text-right">
                                    <span>Showing 1–12 of 18 results</span>
                                </div> 
                            </li>
                            <li>
                               <div class="short-by text-center">
                                    <select class="nice-select">
                                        <option>Default Sorting</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by new arrivals</option>
                                        <option>Sort by price: low to high</option>
                                        <option>Sort by price: high to low</option>
                                    </select>
                                </div> 
                            </li>
                            <li>
                               <div class="short-by text-center">
                                    <select class="nice-select">
                                        <option>Per Page: 12</option>
                                        <option>Per Page: 20</option>
                                        <option>Per Page: 30</option>
                                        <option>Per Page: 50</option>
                                        <option>Per Page: 100</option>
                                    </select>
                                </div> 
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Search Widget -->
                                        <div class="ltn__search-widget mb-30">
                                            <form action="#">
                                                <input type="text" name="search" placeholder="Search your keyword...">
                                                <button type="submit"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-6 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="{{url_helper('project-detail')}}"><img src="{{ userAsset('img/projects/Golden-bay.webp')}}" alt="#"></a>
                                                <div class="real-estate-agent">
                                                    <!--<div class="agent-img">-->
                                                    <!--    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>-->
                                                    <!--</div>-->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For Rent & Sale</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{url_helper('project-detail')}}">29 Golden Bay</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> Belapur</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--<ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">-->
                                                <!--    <li><span>3 </span>-->
                                                <!--        Bed-->
                                                <!--    </li>-->
                                                <!--    <li><span>2 </span>-->
                                                <!--        Bath-->
                                                <!--    </li>-->
                                                <!--    <li><span>3450 </span>-->
                                                <!--        Square Ft-->
                                                <!--    </li>-->
                                                <!--</ul>-->
                                                <!--<div class="product-hover-action">-->
                                                <!--    <ul>-->
                                                <!--        <li>-->
                                                <!--            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">-->
                                                <!--                <i class="flaticon-expand"></i>-->
                                                <!--            </a>-->
                                                <!--        </li>-->
                                                <!--        <li>-->
                                                <!--            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">-->
                                                <!--                <i class="flaticon-heart-1"></i></a>-->
                                                <!--        </li>-->
                                                <!--        <li>-->
                                                <!--            <a href="{{url_helper('project-detail')}}" title="Product Details">-->
                                                <!--                <i class="flaticon-add"></i>-->
                                                <!--            </a>-->
                                                <!--        </li>-->
                                                <!--    </ul>-->
                                                <!--</div>-->
                                                <br>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price"><br>
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                                 <div class="btn-wrapper animated">
                                            <a href="#" class="theme-btn-1 btn btn-effect-1" ;style="text-align:left";>QUERIES</a>
                                          
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-6 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="{{url_helper('gateway')}}"><img src="{{ userAsset('img/projects/gateway.webp')}}" alt="#"></a>
                                                <div class="real-estate-agent">
                                                    <!--<div class="agent-img">-->
                                                    <!--    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>-->
                                                    <!--</div>-->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For Rent & Sale</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{url_helper('gateway')}}">The Gateway</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> Navi-Mumbai</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--<ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">-->
                                                <!--    <li><span>3 </span>-->
                                                <!--        Bed-->
                                                <!--    </li>-->
                                                <!--    <li><span>2 </span>-->
                                                <!--        Bath-->
                                                <!--    </li>-->
                                                <!--    <li><span>3450 </span>-->
                                                <!--        Square Ft-->
                                                <!--    </li>-->
                                                <!--</ul>-->
                                                <!--<div class="product-hover-action">-->
                                                <!--    <ul>-->
                                                <!--        <li>-->
                                                <!--            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">-->
                                                <!--                <i class="flaticon-expand"></i>-->
                                                <!--            </a>-->
                                                <!--        </li>-->
                                                <!--        <li>-->
                                                <!--            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">-->
                                                <!--                <i class="flaticon-heart-1"></i></a>-->
                                                <!--        </li>-->
                                                <!--        <li>-->
                                                <!--            <a href="{{url_helper('gateway')}}" title="thegateway">-->
                                                <!--                <i class="flaticon-add"></i>-->
                                                <!--            </a>-->
                                                <!--        </li>-->
                                                <!--    </ul>-->
                                                <!--</div>-->
                                                <br>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price"><br>
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                                 <div class="btn-wrapper animated">
                                            <a href="#" class="theme-btn-1 btn btn-effect-1" ;style="text-align:left";>QUERIES</a>
                                          
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-6 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="{{url_helper('union-tower')}}"><img src="{{ userAsset('img/projects/unione.webp')}}" alt="#"></a>
                                                <div class="real-estate-agent">
                                                    <!--<div class="agent-img">-->
                                                    <!--    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>-->
                                                    <!--</div>-->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For Rent & Sale</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{url_helper('union-tower')}}">Unione Tower</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> Chembur</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--<ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">-->
                                                <!--    <li><span>3 </span>-->
                                                <!--        Bed-->
                                                <!--    </li>-->
                                                <!--    <li><span>2 </span>-->
                                                <!--        Bath-->
                                                <!--    </li>-->
                                                <!--    <li><span>3450 </span>-->
                                                <!--        Square Ft-->
                                                <!--    </li>-->
                                                <!--</ul>-->
                                                <!--<div class="product-hover-action">-->
                                                <!--    <ul>-->
                                                <!--        <li>-->
                                                <!--            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">-->
                                                <!--                <i class="flaticon-expand"></i>-->
                                                <!--            </a>-->
                                                <!--        </li>-->
                                                <!--        <li>-->
                                                <!--            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">-->
                                                <!--                <i class="flaticon-heart-1"></i></a>-->
                                                <!--        </li>-->
                                                <!--        <li>-->
                                                <!--            <a href="{{url_helper('union-tower')}}" title="unionetower">-->
                                                <!--                <i class="flaticon-add"></i>-->
                                                <!--            </a>-->
                                                <!--        </li>-->
                                                <!--    </ul>-->
                                                <!--</div>-->
                                                <br>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price"><br>
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                                 <div class="btn-wrapper animated">
                                            <a href="#" class="theme-btn-1 btn btn-effect-1" ;style="text-align:left";>QUERIES NOW</a>
                                          
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-6 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="{{url_helper('elevation')}}"><img src="{{ userAsset('img/gallery/antalya-elevation.webp')}}" alt="#"></a>
                                                <div class="real-estate-agent">
                                                    <!--<div class="agent-img">-->
                                                    <!--    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>-->
                                                    <!--</div>-->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For Rent & Sale</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{url_helper('elevation')}}">CBD</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i>  Belapur</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--<ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">-->
                                                <!--    <li><span>3 </span>-->
                                                <!--        Bed-->
                                                <!--    </li>-->
                                                <!--    <li><span>2 </span>-->
                                                <!--        Bath-->
                                                <!--    </li>-->
                                                <!--    <li><span>3450 </span>-->
                                                <!--        Square Ft-->
                                                <!--    </li>-->
                                                <!--</ul>-->
                                                <!--<div class="product-hover-action">-->
                                                <!--    <ul>-->
                                                <!--        <li>-->
                                                <!--            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">-->
                                                <!--                <i class="flaticon-expand"></i>-->
                                                <!--            </a>-->
                                                <!--        </li>-->
                                                <!--        <li>-->
                                                <!--            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">-->
                                                <!--                <i class="flaticon-heart-1"></i></a>-->
                                                <!--        </li>-->
                                                <!--        <li>-->
                                                <!--            <a href="{{url_helper('elevation')}}" title="Antalya Elevation">-->
                                                <!--                <i class="flaticon-add"></i>-->
                                                <!--            </a>-->
                                                <!--        </li>-->
                                                <!--    </ul>-->
                                                <!--</div>-->
                                                <br>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price"><br>
                                             
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                                 <div class="btn-wrapper animated">
                                            <a href="#" class="theme-btn-2 btn btn-effect-1" ;style="text-align:left";>QUERIES NOW</a>
                                          
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <!--<div class="col-xl-6 col-sm-6 col-12">-->
                                    <!--    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">-->
                                    <!--        <div class="product-img">-->
                                    <!--            <a href="{{url_helper('project-detail')}}"><img src="img/product-3/5.jpg" alt="#"></a>-->
                                    <!--            <div class="real-estate-agent">-->
                                    <!--                <div class="agent-img">-->
                                    <!--                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="product-info">-->
                                    <!--            <div class="product-badge">-->
                                    <!--                <ul>-->
                                    <!--                    <li class="sale-badg">For Rent</li>-->
                                    <!--                </ul>-->
                                    <!--            </div>-->
                                    <!--            <h2 class="product-title"><a href="{{url_helper('project-detail')}}">New Apartment Nice View</a></h2>-->
                                    <!--            <div class="product-img-location">-->
                                    <!--                <ul>-->
                                    <!--                    <li>-->
                                    <!--                        <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>-->
                                    <!--                    </li>-->
                                    <!--                </ul>-->
                                    <!--            </div>-->
                                    <!--            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">-->
                                    <!--                <li><span>3 </span>-->
                                    <!--                    Bed-->
                                    <!--                </li>-->
                                    <!--                <li><span>2 </span>-->
                                    <!--                    Bath-->
                                    <!--                </li>-->
                                    <!--                <li><span>3450 </span>-->
                                    <!--                    Square Ft-->
                                    <!--                </li>-->
                                    <!--            </ul>-->
                                    <!--            <div class="product-hover-action">-->
                                    <!--                <ul>-->
                                    <!--                    <li>-->
                                    <!--                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">-->
                                    <!--                            <i class="flaticon-expand"></i>-->
                                    <!--                        </a>-->
                                    <!--                    </li>-->
                                    <!--                    <li>-->
                                    <!--                        <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">-->
                                    <!--                            <i class="flaticon-heart-1"></i></a>-->
                                    <!--                    </li>-->
                                    <!--                    <li>-->
                                    <!--                        <a href="{{url_helper('project-detail')}}" title="Product Details">-->
                                    <!--                            <i class="flaticon-add"></i>-->
                                    <!--                        </a>-->
                                    <!--                    </li>-->
                                    <!--                </ul>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="product-info-bottom">-->
                                    <!--            <div class="product-price">-->
                                    <!--                <span>$34,900<label>/Month</label></span>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!-- ltn__product-item -->
                                    <!--<div class="col-xl-6 col-sm-6 col-12">-->
                                    <!--    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">-->
                                    <!--        <div class="product-img">-->
                                    <!--            <a href="{{url_helper('project-detail')}}"><img src="img/product-3/6.jpg" alt="#"></a>-->
                                    <!--            <div class="real-estate-agent">-->
                                    <!--                <div class="agent-img">-->
                                    <!--                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="product-info">-->
                                    <!--            <div class="product-badge">-->
                                    <!--                <ul>-->
                                    <!--                    <li class="sale-badg">For Rent</li>-->
                                    <!--                </ul>-->
                                    <!--            </div>-->
                                    <!--            <h2 class="product-title"><a href="{{url_helper('project-detail')}}">New Apartment Nice View</a></h2>-->
                                    <!--            <div class="product-img-location">-->
                                    <!--                <ul>-->
                                    <!--                    <li>-->
                                    <!--                        <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>-->
                                    <!--                    </li>-->
                                    <!--                </ul>-->
                                    <!--            </div>-->
                                    <!--            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">-->
                                    <!--                <li><span>3 </span>-->
                                    <!--                    Bed-->
                                    <!--                </li>-->
                                    <!--                <li><span>2 </span>-->
                                    <!--                    Bath-->
                                    <!--                </li>-->
                                    <!--                <li><span>3450 </span>-->
                                    <!--                    Square Ft-->
                                    <!--                </li>-->
                                    <!--            </ul>-->
                                    <!--            <div class="product-hover-action">-->
                                    <!--                <ul>-->
                                    <!--                    <li>-->
                                    <!--                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">-->
                                    <!--                            <i class="flaticon-expand"></i>-->
                                    <!--                        </a>-->
                                    <!--                    </li>-->
                                    <!--                    <li>-->
                                    <!--                        <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">-->
                                    <!--                            <i class="flaticon-heart-1"></i></a>-->
                                    <!--                    </li>-->
                                    <!--                    <li>-->
                                    <!--                        <a href="{{url_helper('project-detail')}}" title="Product Details">-->
                                    <!--                            <i class="flaticon-add"></i>-->
                                    <!--                        </a>-->
                                    <!--                    </li>-->
                                    <!--                </ul>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="product-info-bottom">-->
                                    <!--            <div class="product-price">-->
                                    <!--                <span>$34,900<label>/Month</label></span>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Search Widget -->
                                        <div class="ltn__search-widget mb-30">
                                            <form action="#">
                                                <input type="text" name="search" placeholder="Search your keyword...">
                                                <button type="submit"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="{{url_helper('project-detail')}}"><img src="{{ userAsset('img/product-3/1.jpg')}}" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="{{url_helper('project-detail')}}">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bed
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bath
                                                    </li>
                                                    <li><span>3450 </span>
                                                        Square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src= "{{ userAsset('img/blog/author.jpg')}}" alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{url_helper('project-detail')}}" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="{{url_helper('project-detail')}}"><img src="{{ userAsset('img/product-3/2.jpg')}}" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="{{url_helper('project-detail')}}">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bed
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bath
                                                    </li>
                                                    <li><span>3450 </span>
                                                        Square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src= "{{ userAsset('img/blog/author.jpg')}}" alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{url_helper('project-detail')}}" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="{{url_helper('project-detail')}}"><img src= "{{ userAsset('img/product-3/3.jpg')}}" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="{{url_helper('project-detail')}}">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bed
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bath
                                                    </li>
                                                    <li><span>3450 </span>
                                                        Square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src= "{{ userAsset('img/blog/author.jpg')}}" alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{url_helper('project-detail')}}" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="{{url_helper('project-detail')}}"><img src= "{{ userAsset('img/product-3/4.jpg')}}" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="{{url_helper('project-detail')}}">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bed
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bath
                                                    </li>
                                                    <li><span>3450 </span>
                                                        Square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src= "{{ userAsset('img/blog/author.jpg')}}" alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{url_helper('project-detail')}}" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="{{url_helper('project-detail')}}"><img src= "{{ userAsset('img/product-3/5.jpg')}}" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="{{url_helper('project-detail')}}">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bed
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bath
                                                    </li>
                                                    <li><span>3450 </span>
                                                        Square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src="{{ userAsset('img/blog/author.jpg')}}" alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{url_helper('project-detail')}}" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="ltn__pagination-area text-center">-->
                    <!--    <div class="ltn__pagination">-->
                    <!--        <ul>-->
                    <!--            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>-->
                    <!--            <li><a href="#">1</a></li>-->
                    <!--            <li class="active"><a href="#">2</a></li>-->
                    <!--            <li><a href="#">3</a></li>-->
                    <!--            <li><a href="#">...</a></li>-->
                    <!--            <li><a href="#">10</a></li>-->
                    <!--            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>-->
                    <!--        </ul>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                        <h3 class="mb-10">Advance Information</h3>
                        <label class="mb-30"><small>About 9,620 results (0.62 seconds) </small></label>
                        <!-- Advance Information widget -->
                        <div class="widget ltn__menu-widget">
                            <h4 class="ltn__widget-title">Property Type</h4>
                            <ul>
                                <li>
                                    <a href="shop-right-sidebar.html">
                                        <label class="checkbox-item">House
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="categorey-no">3,924</span>
                                    </a>
                                </li>
                                <li>
                                    <label class="checkbox-item">Single Family
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">3,610</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Apartment
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">2,912</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Office Villa
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">2,687</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Luxary Home
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">1,853</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Studio
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">893</span>
                                </li>
                            </ul>
                            <hr>
                            <h4 class="ltn__widget-title">Amenities</h4>
                            <ul>
                                <li>
                                    <label class="checkbox-item">Dishwasher
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">3,924</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Floor Coverings
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">3,610</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Internet
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">2,912</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Build Wardrobes
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">2,687</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Supermarket
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">1,853</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Kids Zone
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">893</span>
                                </li>
                            </ul>
                            <hr>
                            <h4 class="ltn__widget-title">Price Renge</h4>
                            <ul>
                                <li>
                                    <label class="checkbox-item">Low Budget
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">$5,000 - $10,000</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Medium
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">$10,000 - $30,000</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">High Budget
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">$30,000 Up</span>
                                </li>
                            </ul>
                            <hr>
                            <!-- Price Filter Widget -->
                            <div class="widget--- ltn__price-filter-widget">
                                <h4 class="ltn__widget-title ltn__widget-title-border---">Filter by price</h4>
                                <div class="price_filter">
                                    <div class="price_slider_amount">
                                        <input type="submit"  value="Your range:"/> 
                                        <input type="text" class="amount" name="price"  placeholder="Add Your Price" /> 
                                    </div>
                                    <div class="slider-range"></div>
                                </div>
                            </div>
                            <hr>
                            <h4 class="ltn__widget-title">Bed/bath</h4>
                            <ul>
                                <li>
                                    <label class="checkbox-item">Single
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">3,924</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Double
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">3,610</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Up To 3
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">2,912</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Up To 5
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">2,687</span>
                                </li>
                            </ul>
                            <hr>
                            <h4 class="ltn__widget-title">Catagory</h4>
                            <ul>
                                <li>
                                    <label class="checkbox-item">Buying
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">3,924</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Renting
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">3,610</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Selling
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">2,912</span>
                                </li>
                            </ul>
                        </div>
                        <!-- Category Widget -->
                        <div class="widget ltn__menu-widget d-none">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                            <ul>
                                <li><a href="#">Body <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li><a href="#">Interior <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li><a href="#">Lights <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li><a href="#">Parts <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li><a href="#">Tires <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li><a href="#">Uncategorized <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li><a href="#">Wheel <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            </ul>
                        </div>
                        <!-- Price Filter Widget -->
                        <div class="widget ltn__price-filter-widget d-none">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Filter by price</h4>
                            <div class="price_filter">
                                <div class="price_slider_amount">
                                    <input type="submit"  value="Your range:"/> 
                                    <input type="text" class="amount" name="price"  placeholder="Add Your Price" /> 
                                </div>
                                <div class="slider-range"></div>
                            </div>
                        </div>
                        <!-- Top Rated Product Widget -->
                        <div class="widget ltn__top-rated-product-widget d-none">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Top Rated Product</h4>
                            <ul>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="{{url_helper('project-detail')}}"><img src="img/product/1.png" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="{{url_helper('project-detail')}}">Mixel Solid Seat Cover</a></h6>
                                            <div class="product-price">
                                                <span>$49.00</span>
                                                <del>$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="{{url_helper('project-detail')}}"><img src="img/product/2.png" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="{{url_helper('project-detail')}}">3 Rooms Manhattan</a></h6>
                                            <div class="product-price">
                                                <span>$49.00</span>
                                                <del>$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="{{url_helper('project-detail')}}"><img src="img/product/3.png" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="{{url_helper('project-detail')}}">Coil Spring Conversion</a></h6>
                                            <div class="product-price">
                                                <span>$49.00</span>
                                                <del>$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Search Widget -->
                        <div class="widget ltn__search-widget d-none">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Search Objects</h4>
                            <form action="#">
                                <input type="text" name="search" placeholder="Search your keyword...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <!-- Tagcloud Widget -->
                        <div class="widget ltn__tagcloud-widget d-none">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Popular Tags</h4>
                            <ul>
                                <li><a href="#">Popular</a></li>
                                <li><a href="#">desgin</a></li>
                                <li><a href="#">ux</a></li>
                                <li><a href="#">usability</a></li>
                                <li><a href="#">develop</a></li>
                                <li><a href="#">icon</a></li>
                                <li><a href="#">Car</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Repairs</a></li>
                                <li><a href="#">Auto Parts</a></li>
                                <li><a href="#">Oil</a></li>
                                <li><a href="#">Dealer</a></li>
                                <li><a href="#">Oil Change</a></li>
                                <li><a href="#">Body Color</a></li>
                            </ul>
                        </div>
                        <!-- Size Widget -->
                        <div class="widget ltn__tagcloud-widget ltn__size-widget d-none">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Product Size</h4>
                            <ul>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">XL</a></li>
                                <li><a href="#">XXL</a></li>
                            </ul>
                        </div>
                        <!-- Color Widget -->
                        <div class="widget ltn__color-widget d-none">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Product Color</h4>
                            <ul>
                                <li class="black"><a href="#"></a></li>
                                <li class="white"><a href="#"></a></li>
                                <li class="red"><a href="#"></a></li>
                                <li class="silver"><a href="#"></a></li>
                                <li class="gray"><a href="#"></a></li>
                                <li class="maroon"><a href="#"></a></li>
                                <li class="yellow"><a href="#"></a></li>
                                <li class="olive"><a href="#"></a></li>
                                <li class="lime"><a href="#"></a></li>
                                <li class="green"><a href="#"></a></li>
                                <li class="aqua"><a href="#"></a></li>
                                <li class="teal"><a href="#"></a></li>
                                <li class="blue"><a href="#"></a></li>
                                <li class="navy"><a href="#"></a></li>
                                <li class="fuchsia"><a href="#"></a></li>
                                <li class="purple"><a href="#"></a></li>
                                <li class="pink"><a href="#"></a></li>
                                <li class="nude"><a href="#"></a></li>
                                <li class="orange"><a href="#"></a></li>

                                <li><a href="#" class="orange"></a></li>
                                <li><a href="#" class="orange"></a></li>
                            </ul>
                        </div>
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget d-none">
                            <a href="shop.html"><img src= "{{ userAsset('img/banner/banner-2.jpg')}}" alt="#"></a>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
<!-- PRODUCT DETAILS AREA END -->

<!-- CALL TO ACTION START (call-to-action-6) -->
<!-- <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                    <div class="coll-to-info text-color-white">
                        <h1>Looking for a dream home?</h1>
                        <p>We can help you realize your dream of a new home</p>
                    </div>
                    <div class="btn-wrapper">
                        <a class="btn btn-effect-3 btn-white" href="contact.html">Explore Properties <i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- CALL TO ACTION END -->

<!-- MODAL AREA START (Quick View Modal) -->
<div class="ltn__modal-area ltn__quick-view-modal-area">
    <div class="modal fade" id="quick_view_modal" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <i class="fas fa-times"></i> -->
                    </button>
                </div>
                <div class="modal-body">
                     <div class="ltn__quick-view-modal-inner">
                         <div class="modal-product-item">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-img">
                                        <img src= "{{ userAsset('img/product/4.png')}}" alt="#">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                            </ul>
                                        </div>
                                        <h3>3 Rooms Manhattan</h3>
                                        <div class="product-price">
                                            <span>$149.00</span>
                                            <del>$165.00</del>
                                        </div>
                                        <div class="modal-product-meta ltn__project-details-menu-1">
                                            <ul>
                                                <li>
                                                    <strong>Categories:</strong> 
                                                    <span>
                                                        <a href="#">Parts</a>
                                                        <a href="#">Car</a>
                                                        <a href="#">Seat</a>
                                                        <a href="#">Cover</a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__project-details-menu-2">
                                            <ul>
                                                <li>
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                        <span>ADD TO CART</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__project-details-menu-3">
                                            <ul>
                                                <li>
                                                    <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                        <i class="fas fa-exchange-alt"></i>
                                                        <span>Compare</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li>Share:</li>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

<!-- MODAL AREA START (Add To Cart Modal) -->
<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                     <div class="ltn__quick-view-modal-inner">
                         <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-product-img">
                                        <img src= "{{ userAsset('img/product/1.png')}}" alt="#">
                                    </div>
                                     <div class="modal-product-info">
                                        <h5><a href="{{url_helper('project-detail')}}">3 Rooms Manhattan</a></h5>
                                        <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                        <div class="btn-wrapper">
                                            <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                            <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                        </div>
                                     </div>
                                     <!-- additional-info -->
                                     <div class="additional-info d-none">
                                        <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                        <div class="payment-method">
                                            <img src="{{ userAsset('img/icons/payment.png')}}" alt="#">
                                        </div>
                                     </div>
                                </div>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

<!-- MODAL AREA START (Wishlist Modal) -->
<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                     <div class="ltn__quick-view-modal-inner">
                         <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-product-img">
                                        <img src="{{ userAsset('img/product/7.png')}}" alt="#">
                                    </div>
                                     <div class="modal-product-info">
                                        <h5><a href="{{url_helper('project-detail')}}">3 Rooms Manhattan</a></h5>
                                        <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Wishlist</p>
                                        <div class="btn-wrapper">
                                            <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                        </div>
                                     </div>
                                     <!-- additional-info -->
                                     <div class="additional-info d-none">
                                        <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                        <div class="payment-method">
                                            <img src= "{{ userAsset('img/icons/payment.png')}}" alt="#">
                                        </div>
                                     </div>
                                </div>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

</div>
    
@endsection

@section('js-add')
    <script>
        $(document).ready(function () {

        });

    </script>
@endsection
