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
                        <li><a href="product-details.html">Shop details </a></li>
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
                            <li>Project Details</li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- BREADCRUMB AREA END -->

<!-- IMAGE SLIDER AREA START (img-slider-3) -->
<!--<div class="ltn__img-slider-area mb-90">-->
<!--    <div class="container-fluid">-->
<!--        <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="ltn__img-slide-item-4">-->
<!--                    <a href="img/img-slide/31.jpg" data-rel="lightcase:myCollection">-->
<!--                        <img src="img/img-slide/31.jpg" alt="Image">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-12">-->
<!--                <div class="ltn__img-slide-item-4">-->
<!--                    <a href="img/img-slide/32.jpg" data-rel="lightcase:myCollection">-->
<!--                        <img src="img/img-slide/32.jpg" alt="Image">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-12">-->
<!--                <div class="ltn__img-slide-item-4">-->
<!--                    <a href="img/img-slide/33.jpg" data-rel="lightcase:myCollection">-->
<!--                        <img src="img/img-slide/33.jpg" alt="Image">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-12">-->
<!--                <div class="ltn__img-slide-item-4">-->
<!--                    <a href="img/img-slide/34.jpg" data-rel="lightcase:myCollection">-->
<!--                        <img src="img/img-slide/34.jpg" alt="Image">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-12">-->
<!--                <div class="ltn__img-slide-item-4">-->
<!--                    <a href="img/img-slide/35.jpg" data-rel="lightcase:myCollection">-->
<!--                        <img src="img/img-slide/35.jpg" alt="Image">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- IMAGE SLIDER AREA END -->

<!-- SHOP DETAILS AREA START -->
<div class="ltn__shop-details-area pb-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                    <div class="ltn__blog-meta">
                        <ul>
                            <li class="ltn__blog-category">
                                <a href="#">Featured</a>
                            </li>
                            <li class="ltn__blog-category">
                                <a class="bg-orange" href="#">For Rent</a>
                            </li>
                            <li class="ltn__blog-category">
                                <a class="bg-green" href="#">For Sale</a>
                            </li>
                            <li class="ltn__blog-date">
                                <i class="far fa-calendar-alt"></i>May 19, 2021
                            </li>
                            <li>
                                <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                            </li>
                        </ul>
                    </div>
                    <h2>THE GATEWAY-Grandeur That Defines You </h2>
                    <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span> The Gateway, Navi-Mumbai</label>
                    <div style="height:20px;"></div>
                    
                    <div class="col-lg-12">
                      <img src="{{ userAsset('img/projects/gateway-banner (2).jpg')}}" alt="Image ">
                      </div>
                     
                    <h4 class="title-2">Description</h4>
                    <p> The Gateway has been planned to offer a life of limitless indulgences. Whether it is indoors or outdoors, every unique amenity has been designed to make you spoil for choice. It is not often, that you enjoy a host of luxury recreations all at one place. But out here, we’ve created a pit stop for your senses, where you can indulge and pamper yourself any time of the day.
                    </p>
                    <p>Imagine coming home to a calm retreat
that tickles you with cool breeze, escaping you 
into a whole new world. Spend your days waking 
up to 280° panoramas of azure waters that meet 
the horizons. A haven where you can walk 
languidly like a free bird and celebrate the
fine art of living</p>
                   

                    <!--<h4 class="title-2">Property Detail</h4>  -->
                    <!--<div class="property-detail-info-list section-bg-1 clearfix mb-60">                          -->
                    <!--    <ul>-->
                    <!--        <li><label>Property ID:</label> <span>HZ29</span></li>-->
                    <!--        <li><label>Home Area: </label> <span>120 sqft</span></li>-->
                    <!--        <li><label>Rooms:</label> <span>7</span></li>-->
                    <!--        <li><label>Baths:</label> <span>2</span></li>-->
                    <!--        <li><label>Year built:</label> <span>1992</span></li>-->
                    <!--    </ul>-->
                    <!--    <ul>-->
                    <!--        <li><label>Lot Area:</label> <span>HZ29 </span></li>-->
                    <!--        <li><label>Lot dimensions:</label> <span>120 sqft</span></li>-->
                    <!--        <li><label>Beds:</label> <span>7</span></li>-->
                    <!--        <li><label>Price:</label> <span>2</span></li>-->
                    <!--        <li><label>Property Status:</label> <span>For Sale</span></li>-->
                    <!--    </ul>-->
                    <!--</div>-->
               
                                       
                                        <h4 class="title-2">Facts and Features</h4>
                    <div class="property-detail-feature-list clearfix mb-45">                            
                        <ul>
                                        <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>3, 4 & 6 Bed Bespoke Residences</h6>
                                        <!--<small>20 x 16 sq feet</small>-->
                                    </div>
                                </div>
                            </li>
                            <li>
                                         <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>31 Storeyed Magnificent Tower</h6>
                                        <!--<small>20 x 16 sq feet</small>-->
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Unobstructed Sea Views</h6>
                                        <!--<small>20 x 16 sq feet</small>-->
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>11 ft. Clear Ceiling Height</h6>
                                        <!--<small>20 x 16 sq feet</small>-->
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Uber-Luxurious Amenities</h6>
                                        <!--<small>20 x 16 sq feet</small>-->
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Excellent Connectivity</h6>
                                        <!--<small>20 x 16 sq feet</small>-->
                                    </div>
                                </div>
                            </li>
                            </ul>
                    </div>
                                    
                    <!--<h4 class="title-2">Facts and Features</h4>-->
                    <div class="property-detail-feature-list clearfix mb-45">  
                     <div class="col-lg-6 col-md-6">
                        </div>
                    </div>
                   
                     <h4 class="title-2">From Our Gallery</h4>
                    <div class="ltn__property-details-gallery mb-30">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="img/projects/gateway-livingarea.jpg" data-rel="lightcase:myCollection">
                                    <img class="mb-30" src="{{ userAsset('img/projects/gateway-livingarea.jpg')}}" alt="Image">
                                </a>
                                <a href="img/projects/gateway-lobby.jpg" data-rel="lightcase:myCollection">
                                    <img class="mb-30" src="{{ userAsset('img/projects/gateway-lobby.jpg')}}" alt="Image">
                                </a>
                                <a href="img/projects/gateway-pool.jpg" data-rel="lightcase:myCollection">
                                    <img class="mb-30" src="{{ userAsset('img/projects/gateway-pool.jpg')}}" alt="Image">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="img/projects/gateway-clubhouse.jpg" data-rel="lightcase:myCollection">
                                    <img class="mb-30" src="{{ userAsset('img/projects/gateway-clubhouse.jpg')}}" alt="Image">
                                </a>
                                <a href="img/projects/gateway-bedroom.jpg" data-rel="lightcase:myCollection">
                                    <img class="mb-30" src="{{ userAsset('img/projects/gateway-bedroom.jpg')}}" alt="Image">
                                </a>
                                <a href="img/projects/gateway-gym.jpg" data-rel="lightcase:myCollection">
                                    <img class="mb-30" src="{{ userAsset('img/projects/gateway-gym.jpg')}}" alt="Image">
                                </a>
                                
                            </div>
                        </div>
                    </div>

                    <h2 class="title-2 mb-10">Amenities</h2>
                    <div class="property-details-amenities mb-60">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="ltn__menu-widget">
                                    
                                    <h6> PODIUM AMENITIES</h6>
                                    <ul>
                                        <li>
                                            <label class="checkbox-item">Swimming Pool & Kid’s splash Pool
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        
                                        <li>
                                            <label class="checkbox-item">Zen Garden With Water Body 
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Family Zones
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                         <li>
                                            <label class="checkbox-item">Sun Deck & Party Lawn
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        
                                         <li>
                                            <label class="checkbox-item">Multipurpose Courtfor Football & Basketball
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Children’s Play Area 
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                         <li>
                                            <label class="checkbox-item">Cabanas for Sit Outs
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Wellness Deck
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                         <li>
                                            <label class="checkbox-item">Acupressure Foot Stretch
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Senior Citizen Sit Outs 
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="ltn__menu-widget">
                                    <h6> APARTMENT FEATURES</h6>
                                    <ul>
                                        <li>
                                            <label class="checkbox-item">Well-planned Living & Dining Areas
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Spacious Bedrooms with Sea-View
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Private Deck with Sea View
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Designer Bathrooms with Premium Sanitary Ware
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Robotic Floor Cleaner
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Video Door Security System
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Smart Bio-metric Entry
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Panic Button in Bedrooms & Bathroomss
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Invisible Grill in All Apartments
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Shower Cubicle with Steam in Master Bathroom
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--<div class="col-lg-4 col-md-6">-->
                            <!--    <div class="ltn__menu-widget">-->
                            <!--        <ul>-->
                            <!--            <li>-->
                            <!--                <label class="checkbox-item">Refrigerator-->
                            <!--                    <input type="checkbox" checked="checked">-->
                            <!--                    <span class="checkmark"></span>-->
                            <!--                </label>-->
                            <!--            </li>-->
                            <!--            <li>-->
                            <!--                <label class="checkbox-item">Window Coverings-->
                            <!--                    <input type="checkbox" checked="checked">-->
                            <!--                    <span class="checkmark"></span>-->
                            <!--                </label>-->
                            <!--            </li>-->
                            <!--            <li>-->
                            <!--                <label class="checkbox-item">Washer-->
                            <!--                    <input type="checkbox" checked="checked">-->
                            <!--                    <span class="checkmark"></span>-->
                            <!--                </label>-->
                            <!--            </li>-->
                            <!--            <li>-->
                            <!--                <label class="checkbox-item">24x7 Security-->
                            <!--                    <input type="checkbox" checked="checked">-->
                            <!--                    <span class="checkmark"></span>-->
                            <!--                </label>-->
                            <!--            </li>-->
                            <!--            <li>-->
                            <!--                <label class="checkbox-item">Indoor Game-->
                            <!--                    <input type="checkbox" checked="checked">-->
                            <!--                    <span class="checkmark"></span>-->
                            <!--                </label>-->
                            <!--            </li>-->
                            <!--        </ul>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    
                    <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="ltn__menu-widget">
                                    
                                    <h6> TOWER SPECIFICATIONS</h6>
                                    <ul>
                                        <li>
                                            <label class="checkbox-item">Grand Entrance Lobby with Welcoming Porch
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Double Height Italian Marble Lobby
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Concierge Desk & Car Wash Area
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">24x7 Security Surveillance
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                         <li>
                                            <label class="checkbox-item">Multi Level Car Parking & Valet Parking
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                         </ul>
                                </div>
                                
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="ltn__menu-widget">
                                    
                                    <h6> CLUBHOUSE RECREATIONS</h6>
                                    <ul>
                                        <li>
                                            <label class="checkbox-item">Mini Theatre
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Library 
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Gymnasium with Cardio Section 
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Yoga Studio
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                         <li>
                                            <label class="checkbox-item"> Banquet with Dining
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        </ul>
                                </div>
                            </div>
                            </div>
                   
                    
                    
                    
                    
                    
                    <h4 class="title-2">The Address </h4>
                    <p> Navi Mumbai’s most discerning and well-planned precinct, Vashi, is where you have seen life transfor ming just around you. From a rich and inclusive neighbourhood with natural surroundings, to rapidly developing infrastructure, 
                     highways, malls, hospitals, entertainment avenues and cor porate hubs, Vashi’s dynamism has truly preser ved and enhanced the best of both worlds</p>
                    <h4 class="title-2">Location</h4>
                    
                    <div class="property-details-google-map mb-60">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                 
                    </div>
                 <h4 class="title-2">Podium Master Layout Plan</h4>
                 <img src="{{ userAsset('img/projects/gateway-masterplan.jpg')}}" alt="#">
                    <!-- APARTMENTS PLAN AREA START -->
                    <!--<div class="ltn__apartments-plan-area product-details-apartments-plan mb-60">-->
                    <!--    <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center---">-->
                    <!--        <div class="nav">-->
                    <!--            <a data-bs-toggle="tab" href="#liton_tab_3_1">First Floor</a>-->
                    <!--            <a class="active show"  data-bs-toggle="tab" href="#liton_tab_3_2" class="">Second Floor</a>-->
                    <!--            <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">Third Floor</a>-->
                    <!--            <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">Top Garden</a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="tab-content">-->
                    <!--        <div class="tab-pane fade" id="liton_tab_3_1">-->
                    <!--            <div class="ltn__apartments-tab-content-inner">-->
                    <!--                <div class="row">-->
                    <!--                    <div class="col">-->
                    <!--                        <div class="apartments-plan-img">-->
                    <!--                            <img src="img/projects/gateway-playarea.jpg" alt="#">-->
                    <!--                            <h4>First Floor</h4>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="col-lg-5">-->
                    <!--                        <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">-->
                    <!--                            <h2>First Floor</h2>-->
                                                
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="col-lg-12">-->
                    <!--                        <div class="product-details-apartments-info-list  section-bg-1">-->
                    <!--                            <div class="row">-->
                    <!--                                <div class="col-lg-6">-->
                    <!--                                    <div class="apartments-info-list apartments-info-list-color mt-40---">-->
                    <!--                                        <ul>-->
                    <!--                                            <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>-->
                    <!--                                            <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>-->
                    <!--                                        </ul>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="col-lg-6">-->
                    <!--                                    <div class="apartments-info-list apartments-info-list-color mt-40---">-->
                    <!--                                        <ul>-->
                    <!--                                            <li><label>Belcony/Pets</label> <span>Allowed</span></li>-->
                    <!--                                            <li><label>Lounge</label> <span>650 Sq. Ft</span></li>-->
                    <!--                                        </ul>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="tab-pane fade active show" id="liton_tab_3_2">-->
                    <!--            <div class="ltn__product-tab-content-inner">-->
                    <!--                <div class="row">-->
                    <!--                    <div class="col">-->
                    <!--                        <div class="apartments-plan-img">-->
                    <!--                            <img src="img/projects/gateway-pool.jpg" alt="#">-->
                    <!--                            <h4>Second Floor</h4>-->
                                                
                    <!--                        </div>-->
                    <!--                    </div>-->
                                        <!--<div class="col-lg-5">-->
                                        <!--    <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">-->
                                        <!--        <h2>Second Floor</h2>-->
                                        <!--        <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.-->
                                        <!--            Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo-->
                                        <!--            eiusmod tempor.Incididunt labore et dolore magna aliqua.-->
                                        <!--            sed ayd minim veniam.</p>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-12">-->
                                        <!--    <div class="product-details-apartments-info-list  section-bg-1">-->
                                        <!--        <div class="row">-->
                                        <!--            <div class="col-lg-6">-->
                                        <!--                <div class="apartments-info-list apartments-info-list-color mt-40---">-->
                                        <!--                    <ul>-->
                                        <!--                        <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>-->
                                        <!--                        <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>-->
                                        <!--                    </ul>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--            <div class="col-lg-6">-->
                                        <!--                <div class="apartments-info-list apartments-info-list-color mt-40---">-->
                                        <!--                    <ul>-->
                                        <!--                        <li><label>Belcony/Pets</label> <span>Allowed</span></li>-->
                                        <!--                        <li><label>Lounge</label> <span>650 Sq. Ft</span></li>-->
                                        <!--                    </ul>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="tab-pane fade" id="liton_tab_3_3">-->
                    <!--            <div class="ltn__product-tab-content-inner">-->
                    <!--                <div class="row">-->
                    <!--                    <div class="col">-->
                    <!--                        <div class="apartments-plan-img">-->
                    <!--                            <img src="img/projects/gateway-playarea.jpg" alt="#">-->
                    <!--                            <h4>Third Floor</h4>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                                        <!--<div class="col-lg-5">-->
                                        <!--    <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">-->
                                        <!--        <h2>Third Floor</h2>-->
                                        <!--        <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.-->
                                        <!--            Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo-->
                                        <!--            eiusmod tempor.Incididunt labore et dolore magna aliqua.-->
                                        <!--            sed ayd minim veniam.</p>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-12">-->
                                        <!--    <div class="product-details-apartments-info-list  section-bg-1">-->
                                        <!--        <div class="row">-->
                                        <!--            <div class="col-lg-6">-->
                                        <!--                <div class="apartments-info-list apartments-info-list-color mt-40---">-->
                                        <!--                    <ul>-->
                                        <!--                        <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>-->
                                        <!--                        <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>-->
                                        <!--                    </ul>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--            <div class="col-lg-6">-->
                                        <!--                <div class="apartments-info-list apartments-info-list-color mt-40---">-->
                                        <!--                    <ul>-->
                                        <!--                        <li><label>Belcony/Pets</label> <span>Allowed</span></li>-->
                                        <!--                        <li><label>Lounge</label> <span>650 Sq. Ft</span></li>-->
                                        <!--                    </ul>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="tab-pane fade" id="liton_tab_3_4">-->
                    <!--            <div class="ltn__product-tab-content-inner">-->
                    <!--                <div class="row">-->
                    <!--                    <div class="col-lg-7">-->
                    <!--                        <div class="apartments-plan-img">-->
                    <!--                            <img src="img/others/10.png" alt="#">-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="col-lg-5">-->
                    <!--                        <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">-->
                    <!--                            <h2>Top Garden</h2>-->
                    <!--                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.-->
                    <!--                                Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo-->
                    <!--                                eiusmod tempor.Incididunt labore et dolore magna aliqua.-->
                    <!--                                sed ayd minim veniam.</p>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="col-lg-12">-->
                    <!--                        <div class="product-details-apartments-info-list  section-bg-1">-->
                    <!--                            <div class="row">-->
                    <!--                                <div class="col-lg-6">-->
                    <!--                                    <div class="apartments-info-list apartments-info-list-color mt-40---">-->
                    <!--                                        <ul>-->
                    <!--                                            <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>-->
                    <!--                                            <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>-->
                    <!--                                        </ul>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="col-lg-6">-->
                    <!--                                    <div class="apartments-info-list apartments-info-list-color mt-40---">-->
                    <!--                                        <ul>-->
                    <!--                                            <li><label>Belcony/Pets</label> <span>Allowed</span></li>-->
                    <!--                                            <li><label>Lounge</label> <span>650 Sq. Ft</span></li>-->
                    <!--                                        </ul>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- APARTMENTS PLAN AREA END -->

                    <!--<h4 class="title-2">Property Video</h4>-->
                    <!--<div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50 bg-image mb-60" data-bs-bg="img/others/5.jpg">-->
                    <!--    <a href="img/projects/gateway-clubhouse.jpg" data-rel="lightcase:myCollection">-->
                    <!--                <img class="mb-30" src="img/projects/gateway-clubhouse.jpg" alt="Image">-->
                    <!--            </a>-->
                    <!--</div>-->
                    
                    <div class="ltn__shop-details-tab-content-inner--- ltn__shop-details-tab-inner-2 ltn__product-details-review-inner mb-60">
                        <!--<h4 class="title-2">Customer Reviews</h4>-->
                        <div class="product-ratting">
                            <!--<ul>-->
                            <!--    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                            <!--    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>-->
                            <!--    <li><a href="#"><i class="far fa-star"></i></a></li>-->
                            <!--    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>-->
                            <!--</ul>-->
                        </div>
                        <!--<hr>-->
                        <!-- comment-area -->
                        <div class="ltn__comment-area mb-30">
                            <div class="ltn__comment-inner">
                                <!--<ul>-->
                                <!--    <li>-->
                                <!--        <div class="ltn__comment-item clearfix">-->
                                <!--            <div class="ltn__commenter-img">-->
                                <!--                <img src="img/testimonial/1.jpg" alt="Image">-->
                                <!--            </div>-->
                                <!--            <div class="ltn__commenter-comment">-->
                                <!--                <h6><a href="#">Adam Smit</a></h6>-->
                                <!--                <div class="product-ratting">-->
                                <!--                    <ul>-->
                                <!--                        <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                                <!--                        <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                                <!--                        <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                                <!--                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>-->
                                <!--                        <li><a href="#"><i class="far fa-star"></i></a></li>-->
                                <!--                    </ul>-->
                                <!--                </div>-->
                                <!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>-->
                                <!--                <span class="ltn__comment-reply-btn">September 3, 2020</span>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </li>-->
                                <!--    <li>-->
                                <!--        <div class="ltn__comment-item clearfix">-->
                                <!--            <div class="ltn__commenter-img">-->
                                <!--                <img src="img/testimonial/3.jpg" alt="Image">-->
                                <!--            </div>-->
                                <!--            <div class="ltn__commenter-comment">-->
                                <!--                <h6><a href="#">Adam Smit</a></h6>-->
                                <!--                <div class="product-ratting">-->
                                <!--                    <ul>-->
                                <!--                        <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                                <!--                        <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                                <!--                        <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                                <!--                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>-->
                                <!--                        <li><a href="#"><i class="far fa-star"></i></a></li>-->
                                <!--                    </ul>-->
                                <!--                </div>-->
                                <!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>-->
                                <!--                <span class="ltn__comment-reply-btn">September 2, 2020</span>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </li>-->
                                <!--    <li>-->
                                <!--        <div class="ltn__comment-item clearfix">-->
                                <!--            <div class="ltn__commenter-img">-->
                                <!--                <img src="img/testimonial/2.jpg" alt="Image">-->
                                <!--            </div>-->
                                <!--            <div class="ltn__commenter-comment">-->
                                <!--                <h6><a href="#">Adam Smit</a></h6>-->
                                <!--                <div class="product-ratting">-->
                                <!--                    <ul>-->
                                <!--                        <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                                <!--                        <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                                <!--                        <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                                <!--                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>-->
                                <!--                        <li><a href="#"><i class="far fa-star"></i></a></li>-->
                                <!--                    </ul>-->
                                <!--                </div>-->
                                <!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>-->
                                <!--                <span class="ltn__comment-reply-btn">September 2, 2020</span>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </li>-->
                                <!--</ul>-->
                            </div>
                        </div>
                        <!-- comment-reply -->
                        <div class="ltn__comment-reply-area ltn__form-box mb-30">
                            <form action="#">
                                <h4>Add a Review</h4>
                                <div class="mb-30">
                                    <div class="add-a-review">
                                        <h6>Your Ratings:</h6>
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-item input-item-textarea ltn__custom-icon">
                                    <textarea placeholder="Type your comments...."></textarea>
                                </div>
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" placeholder="Type your name....">
                                </div>
                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email" placeholder="Type your email....">
                                </div>
                                <div class="input-item input-item-website ltn__custom-icon">
                                    <input type="text" name="website" placeholder="Type your website....">
                                </div>
                                <label class="mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>
                                <div class="btn-wrapper">
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--<h4 class="title-2">Related Properties</h4>-->
                    <!--<div class="row">-->
                        <!-- ltn__product-item -->
                        <!--<div class="col-xl-6 col-sm-6 col-12">-->
                        <!--    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">-->
                        <!--        <div class="product-img">-->
                        <!--            <a href="Antalya-Elevation.html"><img src="img/gallery/antalya-elevation.webp" alt="#"></a>-->
                        <!--            <div class="real-estate-agent">-->
                        <!--                <div class="agent-img">-->
                        <!--                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="product-info">-->
                        <!--            <div class="product-badge">-->
                        <!--                <ul>-->
                        <!--                    <li class="sale-badg">For Rent & Sale</li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--            <h2 class="product-title"><a href="Antalya-Elevation.html">New Apartment Nice View</a></h2>-->
                        <!--            <div class="product-img-location">-->
                        <!--                <ul>-->
                        <!--                    <li>-->
                        <!--                        <a href="Antalya-Elevation.html"><i class="flaticon-pin"></i> CBD Belapur</a>-->
                        <!--                    </li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">-->
                        <!--                <li><span>3 </span>-->
                        <!--                    Bedrooms-->
                        <!--                </li>-->
                        <!--                <li><span>2 </span>-->
                        <!--                    Bathrooms-->
                        <!--                </li>-->
                        <!--                <li><span>3450 </span>-->
                        <!--                    square Ft-->
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
                        <!--                        <a href="portfolio-details.html" title="Compare">-->
                        <!--                            <i class="flaticon-add"></i>-->
                        <!--                        </a>-->
                        <!--                    </li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="product-info-bottom">-->
                        <!--            <div class="product-price">-->
                        <!--                <span>$349,00<label>/Month</label></span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!-- ltn__product-item -->
                        <!--<div class="col-xl-6 col-sm-6 col-12">-->
                        <!--    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">-->
                        <!--        <div class="product-img">-->
                        <!--            <a href="product-details.html"><img src="img/projects/Golden-bay.webp" alt="#"></a>-->
                        <!--            <div class="real-estate-agent">-->
                        <!--                <div class="agent-img">-->
                        <!--                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="product-info">-->
                        <!--            <div class="product-badge">-->
                        <!--                <ul>-->
                        <!--                    <li class="sale-badg">For Rent & Sale</li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>-->
                        <!--            <div class="product-img-location">-->
                        <!--                <ul>-->
                        <!--                    <li>-->
                        <!--                        <a href="product-details.html"><i class="flaticon-pin"></i> 29 Golden Bay, Belapur</a>-->
                        <!--                    </li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">-->
                        <!--                <li><span>3 </span>-->
                        <!--                    Bedrooms-->
                        <!--                </li>-->
                        <!--                <li><span>2 </span>-->
                        <!--                    Bathrooms-->
                        <!--                </li>-->
                        <!--                <li><span>3450 </span>-->
                        <!--                    square Ft-->
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
                        <!--                        <a href="portfolio-details.html" title="Compare">-->
                        <!--                            <i class="flaticon-add"></i>-->
                        <!--                        </a>-->
                        <!--                    </li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--        </div>-->
                                <!--<div class="product-info-bottom">-->
                                <!--    <div class="product-price">-->
                                <!--        <span>$349,00<label>/Month</label></span>-->
                                <!--    </div>-->
                                <!--</div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    <!--</div>-->
                </div>
            </div>
            
            
            
            
            
            <div class="col-lg-4">
                <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
                    
                    
                    
                    <div class="widget ltn__social-media-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Follow us</h4>
                        <div class="ltn__social-media-2">
                            <ul>
                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Author Widget -->
                    <!--<div class="widget ltn__author-widget">-->
                    <!--    <div class="ltn__author-widget-inner text-center">-->
                    <!--        <img src="img/team/4.jpg" alt="Image">-->
                    <!--        <h5>Rosalina D. Willaimson</h5>-->
                    <!--        <small>Traveller/Photographer</small>-->
                    <!--        <div class="product-ratting">-->
                    <!--            <ul>-->
                    <!--                <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>-->
                    <!--                <li><a href="#"><i class="far fa-star"></i></a></li>-->
                    <!--                <li class="review-total"> <a href="#"> ( 1 Reviews )</a></li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis distinctio, odio, eligendi suscipit reprehenderit atque.</p>-->
                    <!--        <div class="ltn__social-media">-->
                    <!--            <ul>-->
                    <!--                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>-->
                    <!--                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>-->
                    <!--                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>-->
                                    
                    <!--                <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<img src="img/projects/gateway-banner.jpg" alt="Image">-->
                     <!--<div style="height:30px;"></div>-->
                    <!-- Search Widget -->
                    <!--<div class="widget ltn__search-widget">-->
                    <!--    <h4 class="ltn__widget-title ltn__widget-title-border-2">Search Objects</h4>-->
                    <!--    <form action="#">-->
                    <!--        <input type="text" name="search" placeholder="Search your keyword...">-->
                    <!--        <button type="submit"><i class="fas fa-search"></i></button>-->
                    <!--    </form>-->
                    <!--</div>-->
                    <!-- Form Widget -->
                    <div class="widget ltn__form-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Drop Messege For Book</h4>
                        <form action="#">
                            <input type="text" name="yourname" placeholder="Your Name*">
                            <input type="text" name="youremail" placeholder="Your e-Mail*">
                            <textarea name="yourmessage" placeholder="Write Message..."></textarea>
                            <button type="submit" class="btn theme-btn-1">Send Messege</button>
                        </form>
                    </div>
                    <!-- Top Rated Product Widget -->
                    <!--<div class="widget ltn__top-rated-product-widget">-->
                    <!--    <h4 class="ltn__widget-title ltn__widget-title-border-2">Top Rated Product</h4>-->
                    <!--    <ul>-->
                    <!--        <li>-->
                    <!--            <div class="top-rated-product-item clearfix">-->
                    <!--                <div class="top-rated-product-img">-->
                    <!--                    <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>-->
                    <!--                </div>-->
                    <!--                <div class="top-rated-product-info">-->
                    <!--                    <div class="product-ratting">-->
                    <!--                        <ul>-->
                    <!--                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                    <!--                    <h6><a href="product-details.html">Luxury House In Greenville </a></h6>-->
                    <!--                    <div class="product-price">-->
                    <!--                        <span>$30,000.00</span>-->
                    <!--                        <del>$35,000.00</del>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <div class="top-rated-product-item clearfix">-->
                    <!--                <div class="top-rated-product-img">-->
                    <!--                    <a href="The Gateway.html"><img src="img/product/2.png" alt="#"></a>-->
                    <!--                </div>-->
                    <!--                <div class="top-rated-product-info">-->
                    <!--                    <div class="product-ratting">-->
                    <!--                        <ul>-->
                    <!--                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                    <!--                    <h6><a href="The Gateway.html">Apartment with Subunits</a></h6>-->
                    <!--                    <div class="product-price">-->
                    <!--                        <span>$30,000.00</span>-->
                    <!--                        <del>$35,000.00</del>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <div class="top-rated-product-item clearfix">-->
                    <!--                <div class="top-rated-product-img">-->
                    <!--                    <a href="product-details.html"><img src="img/product/3.png" alt="#"></a>-->
                    <!--                </div>-->
                    <!--                <div class="top-rated-product-info">-->
                    <!--                    <div class="product-ratting">-->
                    <!--                        <ul>-->
                    <!--                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fas fa-star"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="far fa-star"></i></a></li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                    <!--                    <h6><a href="product-details.html">3 Rooms Manhattan</a></h6>-->
                    <!--                    <div class="product-price">-->
                    <!--                        <span>$30,000.00</span>-->
                    <!--                        <del>$35,000.00</del>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                    <!-- Menu Widget (Category) -->
                    <!--<div class="widget ltn__menu-widget ltn__menu-widget-2--- ltn__menu-widget-2-color-2---">-->
                    <!--    <h4 class="ltn__widget-title ltn__widget-title-border-2">Top Categories</h4>-->
                    <!--    <ul>-->
                    <!--        <li><a href="#">Apartments <span>(26)</span></a></li>-->
                    <!--        <li><a href="#">Picture Stodio <span>(30)</span></a></li>-->
                    <!--        <li><a href="#">Office  <span>(71)</span></a></li>-->
                    <!--        <li><a href="#">Luxary Vilas <span>(56)</span></a></li>-->
                    <!--        <li><a href="#">Duplex House <span>(60)</span></a></li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                    <!-- Popular Product Widget -->
                    <div class="widget ltn__popular-product-widget">       
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Popular Properties</h4>                     
                        <div class="row ltn__popular-product-widget-active slick-arrow-1">
                            <!-- ltn__product-item -->
                            <div class="col-12">
                                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                    <div class="product-img">
                                        <a href="Antalya-Elevation.html"><img src="{{ userAsset('img/gallery/antalya-elevation.webp')}}" alt="#"></a>
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
                                    <h2 class="product-title"><a href="Antalya-Elevation.html">Antalya Elevation</a></h2>
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="Antalya-Elevation.html"><i class="flaticon-pin"></i> CBD Belapur</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                        <!--<li><span>3 </span>-->
                                        <!--    Bedrooms-->
                                        <!--</li>-->
                                        <!--<li><span>2 </span>-->
                                        <!--    Bathrooms-->
                                        <!--</li>-->
                                        <!--<li><span>3450 </span>-->
                                        <!--    square Ft-->
                                        <!--</li>-->
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-12">
                                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="{{ userAsset('img/projects/Golden-bay.webp')}}" alt="#"></a>
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
                                    <h2 class="product-title"><a href="product-details.html">The Golden Saga Begins</a></h2>
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="product-details.html"><i class="flaticon-pin"></i> 29 Golden Bay, Belapur</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                        <!--<li><span>3 </span>-->
                                        <!--    Bedrooms-->
                                        <!--</li>-->
                                        <!--<li><span>2 </span>-->
                                        <!--    Bathrooms-->
                                        <!--</li>-->
                                        <!--<li><span>3450 </span>-->
                                        <!--    square Ft-->
                                        <!--</li>-->
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-12">
                                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                    <div class="product-img">
                                        <a href="unionetower.html"><img src="{{ userAsset('img/projects/unione.webp')}}" alt="#"></a>
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
                                    <h2 class="product-title"><a href="unionetower.html">Unique Tower City Living</a></h2>
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="unionetower.html"><i class="flaticon-pin"></i> Unione Tower, Chembur</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                        <!--<li><span>3 </span>-->
                                        <!--    Bedrooms-->
                                        <!--</li>-->
                                        <!--<li><span>2 </span>-->
                                        <!--    Bathrooms-->
                                        <!--</li>-->
                                        <!--<li><span>3450 </span>-->
                                        <!--    square Ft-->
                                        <!--</li>-->
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                    <!-- Popular Post Widget -->
                    <!--<div class="widget ltn__popular-post-widget">-->
                    <!--    <h4 class="ltn__widget-title ltn__widget-title-border-2">Leatest Blogs</h4>-->
                    <!--    <ul>-->
                    <!--        <li>-->
                    <!--            <div class="popular-post-widget-item clearfix">-->
                    <!--                <div class="popular-post-widget-img">-->
                    <!--                    <a href="blog-details.html"><img src="img/team/5.jpg" alt="#"></a>-->
                    <!--                </div>-->
                    <!--                <div class="popular-post-widget-brief">-->
                    <!--                    <h6><a href="blog-details.html">Lorem ipsum dolor sit-->
                    <!--                        cing elit, sed do.</a></h6>-->
                    <!--                    <div class="ltn__blog-meta">-->
                    <!--                        <ul>-->
                    <!--                            <li class="ltn__blog-date">-->
                    <!--                                <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <div class="popular-post-widget-item clearfix">-->
                    <!--                <div class="popular-post-widget-img">-->
                    <!--                    <a href="blog-details.html"><img src="img/team/6.jpg" alt="#"></a>-->
                    <!--                </div>-->
                    <!--                <div class="popular-post-widget-brief">-->
                    <!--                    <h6><a href="blog-details.html">Lorem ipsum dolor sit-->
                    <!--                        cing elit, sed do.</a></h6>-->
                    <!--                    <div class="ltn__blog-meta">-->
                    <!--                        <ul>-->
                    <!--                            <li class="ltn__blog-date">-->
                    <!--                                <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <div class="popular-post-widget-item clearfix">-->
                    <!--                <div class="popular-post-widget-img">-->
                    <!--                    <a href="blog-details.html"><img src="img/team/7.jpg" alt="#"></a>-->
                    <!--                </div>-->
                    <!--                <div class="popular-post-widget-brief">-->
                    <!--                    <h6><a href="blog-details.html">Lorem ipsum dolor sit-->
                    <!--                        cing elit, sed do.</a></h6>-->
                    <!--                    <div class="ltn__blog-meta">-->
                    <!--                        <ul>-->
                    <!--                            <li class="ltn__blog-date">-->
                    <!--                                <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <div class="popular-post-widget-item clearfix">-->
                    <!--                <div class="popular-post-widget-img">-->
                    <!--                    <a href="blog-details.html"><img src="img/team/8.jpg" alt="#"></a>-->
                    <!--                </div>-->
                    <!--                <div class="popular-post-widget-brief">-->
                    <!--                    <h6><a href="blog-details.html">Lorem ipsum dolor sit-->
                    <!--                        cing elit, sed do.</a></h6>-->
                    <!--                    <div class="ltn__blog-meta">-->
                    <!--                        <ul>-->
                    <!--                            <li class="ltn__blog-date">-->
                    <!--                                <a href="#"><i class="far fa-calendar-alt"></i>June 22, 2020</a>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                    <!-- Social Media Widget -->
                    <!--<div class="widget ltn__social-media-widget">-->
                    <!--    <h4 class="ltn__widget-title ltn__widget-title-border-2">Follow us</h4>-->
                    <!--    <div class="ltn__social-media-2">-->
                    <!--        <ul>-->
                    <!--            <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>-->
                    <!--            <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>-->
                    <!--            <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>-->
                    <!--            <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>-->
                                
                    <!--        </ul>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- Tagcloud Widget -->
                    <!--<div class="widget ltn__tagcloud-widget">-->
                    <!--    <h4 class="ltn__widget-title ltn__widget-title-border-2">Popular Tags</h4>-->
                    <!--    <ul>-->
                    <!--        <li><a href="#">Popular</a></li>-->
                    <!--        <li><a href="#">desgin</a></li>-->
                    <!--        <li><a href="#">ux</a></li>-->
                    <!--        <li><a href="#">usability</a></li>-->
                    <!--        <li><a href="#">develop</a></li>-->
                    <!--        <li><a href="#">icon</a></li>-->
                    <!--        <li><a href="#">Car</a></li>-->
                    <!--        <li><a href="#">Service</a></li>-->
                    <!--        <li><a href="#">Repairs</a></li>-->
                    <!--        <li><a href="#">Auto Parts</a></li>-->
                    <!--        <li><a href="#">Oil</a></li>-->
                    <!--        <li><a href="#">Dealer</a></li>-->
                    <!--        <li><a href="#">Oil Change</a></li>-->
                    <!--        <li><a href="#">Body Color</a></li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget d-none">
                        <a href="shop.html"><img src="{{ userAsset('img/banner/2.jpg')}}" alt="#"></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- SHOP DETAILS AREA END -->

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter pb-70 d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center---">
                    <h1 class="section-title">Related Properties</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__related-product-slider-two-active slick-arrow-1">
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{ userAsset('img/product-3/1.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <!--<div class="agent-img">-->
                            <!--    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badg">For Rent</li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                        <div class="product-img-location">
                            <ul>
                                <li>
                                    <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
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
                                    <a href="portfolio-details.html" title="Compare">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info-bottom">
                        <div class="product-price">
                            <span>$349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{ userAsset('img/product-3/2.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <!--<div class="agent-img">-->
                            <!--    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badg">For Sale</li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                        <div class="product-img-location">
                            <ul>
                                <li>
                                    <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
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
                                    <a href="portfolio-details.html" title="Compare">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info-bottom">
                        <div class="product-price">
                            <span>$349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{ userAsset('img/product-3/3.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <!--<div class="agent-img">-->
                            <!--    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badg">For Rent</li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                        <div class="product-img-location">
                            <ul>
                                <li>
                                    <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
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
                                    <a href="portfolio-details.html" title="Compare">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info-bottom">
                        <div class="product-price">
                            <span>$349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{ userAsset('img/product-3/4.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <!--<div class="agent-img">-->
                            <!--    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badg">For Rent</li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                        <div class="product-img-location">
                            <ul>
                                <li>
                                    <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
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
                                    <a href="portfolio-details.html" title="Compare">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info-bottom">
                        <div class="product-price">
                            <span>$349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{ userAsset('img/product-3/5.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <!--<div class="agent-img">-->
                            <!--    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badg">For Rent</li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                        <div class="product-img-location">
                            <ul>
                                <li>
                                    <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
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
                                    <a href="portfolio-details.html" title="Compare">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info-bottom">
                        <div class="product-price">
                            <span>$349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->

@endsection

@section('js-add')
    <script>
        $(document).ready(function () {

        });

    </script>
@endsection