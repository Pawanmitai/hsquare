<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title')</title>

    @include('include.user.include-css')

    @yield('css-add')
</head>
<body>
<!-- Content Wrapper. Contains page content -->
<div class="body-wrapper">
    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area section-bg-6 top-area-color-white---">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:info@hsquare.co.in?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> info@hsquare.co.in</a></li>
                                <li><a href="tel:+97-1509612860"><i class="fa fa-phone"></i> +97-1509612860</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li class="d-none">
                                        <!-- ltn__language-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                            <ul>
                                                <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                    <ul>
                                                        <li><a href="#">Arabic</a></li>
                                                        <li><a href="#">Bengali</a></li>
                                                        <li><a href="#">Chinese</a></li>
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">French</a></li>
                                                        <li><a href="#">Hindi</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                
                                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                <!--<li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>-->
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- header-top-btn -->
                                        <div class="header-top-btn">
                                            <a href="login.html">Agent Portal</a>
                                             
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->
        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a1 href="index.html"><img src="{{ userAsset('img/Hsquare-Logo4.png')}}" alt="Logo"></a1>
                            </div>

                            
                            
                            <div class="get-support clearfix d-none">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Get Support</h6>
                                    <h4><a href="tel: +971509612860"> +971509612860</a></h4>
                                </div>
                            </div>

                            
                            @if(Request::segment(1) === 'uae')
                                <button type="button" id="flag-btn" data-toggle="modal" data-target="#countryModal" class="country-flag popup-with-zoom-anim" data-tippy-placement="right" data-tippy="">
                                    <img src="{{ userAsset('img/flag/uae.png')}}">
                                </button>
                            @else
                                <button type="button" id="flag-btn" data-toggle="modal" data-target="#countryModal" class="country-flag popup-with-zoom-anim" data-tippy-placement="right" data-tippy="">
                                    <img src="{{ userAsset('img/flag/in.png')}}">
                                </button>
                               
                            @endif
                            
                            
                        </div>
                        
                    </div>
                    <div class="col header-menu-column">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu" >
                                    <ul>
                                        <li><a href="{{ url_helper('/') }}">HOME</a></li>
                                            <ul class="sub-menu menu-pages-img-show">
                                                <li>
                                                    <a href="index.html">Home Style 01</a>
                                                    <img src="img/home-demos/home-1.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-2.html">Home Style 02</a>
                                                    <img src="img/home-demos/home-2.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-3.html">Home Style 03</a>
                                                    <img src="img/home-demos/home-3.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-4.html">Home Style 04</a>
                                                    <img src="img/home-demos/home-4.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-5.html">Home Style 05 <span class="menu-item-badge">video</span></a>
                                                    <img src="img/home-demos/home-5.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-6.html">Home Style 06</a>
                                                    <img src="img/home-demos/home-6.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-7.html">Home Style 07</a>
                                                    <img src="img/home-demos/home-7.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-8.html">Home Style 08</a>
                                                    <img src="img/home-demos/home-8.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-9.html">Home Style 09</a>
                                                    <img src="img/home-demos/home-9.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-10.html">Home Style 10 <span class="menu-item-badge">Map</span></a>
                                                    <img src="img/home-demos/home-10.jpg" alt="#">
                                                </li>
                                                <li>
                                                    <a href="index-11.html">Home Style 11</a>
                                                    <img src="img/home-demos/home-11.jpg" alt="#">
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url_helper('offer')}}">OFFERS</a></li>
                                        <li><a href="{{ url_helper('project') }}">PROJECTS</a></li>
                                            
                                        <li><a href="{{ url_helper('mortagage-assist')}}">MORTAGAGE ASSIST</a></li>
                                            
                                        <li class="menu-icon"><a href="#">ADVICE</a>
                                    
                                            <ul>
                                                <li><a href="{{ url_helper('why-hsquare')}}">Why HSQUARE ?</a></li>
                                                <li><a href="{{ url_helper('why-in-dubai')}}">Why in Dubai ?</a></li>
                                                <li><a href="{{ url_helper('seller-guide')}}">Seller's Guide</a></li>
                                            </ul>
                                        </li> 
                                                
                                                
                                        <li><a href="contact.html">CONTACT</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col ltn__header-options ltn__header-options-2 mb-sm-20">
                        
                        <!-- user-menu -->
                        <div class="ltn__drop-menu user-menu">
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-user"></i></a>
                                    <ul>
                                        <li><a href="login.html">Sign in</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="account.html">My Account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        </div>
                       
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>

    <!-- Modal -->
   <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="countryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Select Country</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img src="{{ userAsset('img/flag/in.png')}}">
                    <a href="{{ url('/in/')}}" class="country-flag popup-with-zoom-anim country-slector" data-country-code="in" data-tippy-placement="left" data-tippy="">India</a>
                </div>
                <div class="col-sm-6 text-center">
                    <img src="{{ userAsset('img/flag/uae.png')}}">
                    <a href="{{ url('/uae/')}}" class="country-flag popup-with-zoom-anim country-slector" data-country-code="uae" data-tippy-placement="left" data-tippy="">UAE</a>
                </div>
            </div>
           
        </div>
        <div class="modal-footer"></div>
    </div>
    </div>
</div>


    <!-- HEADER AREA END -->
    @yield('body')

   @include('include.user.include-footer');

   
</div>
<!-- /.content-wrapper -->

 
<!-- preloader area start -->
<div class="preloader d-none" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

@include('include.user.include-js')

@yield('js-add')

<script>
    $(document).ready(function() {
        
    });
</script>

</body>
</html>
