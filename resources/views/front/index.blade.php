@extends('front.master')
@section('content')
  <div class="ltn__utilize-overlay"></div>


    <!-- SLIDER AREA START (slider-4) -->
    <div class="ltn__slider-area ltn__slider-4 position-relative ltn__primary-bg fix">
        <div class="ltn__slide-one-active----- slick-slide-arrow-1----- slick-slide-dots-1----- arrow-white----- ltn__slide-animation-active">

            <!-- HTML5 VIDEO -->
            <video autoplay muted loop id="myVideo">
                <source src="{{asset('theme/media/3.mp4')}}" type="video/mp4">
            </video>

            <!-- YouTube VIDEO -->
            {{-- <div class="ltn__youtube-video-background">
                <iframe frameborder="0" height="100%" width="100%"
                  src="https://www.youtube.com/embed/9ge5PzHSS0Y?playlist=9ge5PzHSS0Y&loop=1&controls=0&showinfo=0&autoplay=1&mute=1">
                </iframe>
            </div> --}}

            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-7 bg-image--- bg-overlay-theme-black-10---" data-bs-bg="img/slider/41.jpg')}}">
                <div class="ltn__slide-item-inner text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h6 class="slide-sub-title white-color animated"><span><i class="fas fa-home"></i></span> Olinks Homes</h6>
                                        <h1 class="slide-title text-uppercase white-color animated ">Find Your Dream <br> Home</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="{{asset('theme/img/others/7.png')}}" alt="About Us Image">
                        <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">

                            <div class="ltn__video-img ltn__animation-pulse1">
                                <img src="{{asset('theme/img/others/8.png')}}" alt="video popup bg image">
                                <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&amp;showinfo=0"  data-rel="lightcase:myCollection">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-20">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                            <h1 class="section-title">The Leading Link To Your Luxurious Dream Homes
                                <span>.</span></h1>
                            <p>Over 400 people work with us in more than 70 countries all over the
                                This breadth of global coverage, combined with specialist services</p>
                        </div>
                        <ul class="ltn__list-item-half clearfix">
                            <li>
                                <i class="flaticon-home-2"></i>
                                Smart Home Design
                            </li>
                            <li>
                                <i class="flaticon-mountain"></i>
                                Beautiful Scene Around
                            </li>
                            <li>
                                <i class="flaticon-heart"></i>
                                Exceptional Lifestyle
                            </li>
                            <li>
                                <i class="flaticon-secure"></i>
                                Complete 24/7 Security
                            </li>
                        </ul>
                        <div class="ltn__callout bg-overlay-theme-05  mt-30">
                            <p>Olinks Homes is all about linking you to Luxurious Housing, High End Offices and Wearhouses among others</p>
                        </div>
                        <div class="btn-wrapper animated">
                            <a href="https://olinkshomes.com/our-services" class="theme-btn-1 btn btn-effect-1">OUR SERVICES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- COUNTER UP AREA START -->
    <div class="ltn__counterup-area section-bg-1 pt-120 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-color-white---">
                        <div class="counter-icon">
                            <i class="flaticon-select"></i>
                        </div>
                        <h1><span class="counter">560</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Total Area Sq</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-color-white---">
                        <div class="counter-icon">
                            <i class="flaticon-office"></i>
                        </div>
                        <h1><span class="counter">98</span><span class="counterUp-letter">K</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Houses Sold</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-color-white---">
                        <div class="counter-icon">
                            <i class="flaticon-excavator"></i>
                        </div>
                        <h1><span class="counter">268</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Total Constructions</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-color-white---">
                        <div class="counter-icon">
                            <i class="flaticon-armchair"></i>
                        </div>
                        <h1><span class="counter">340</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Apartio Rooms</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COUNTER UP AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-120 pb-90 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-30">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                            <h1 class="section-title">Featured Property</h1>
                            <p>Houzez Homes located at limuru, 2KM away from the Main Road</p>
                        </div>
                        <ul class="ltn__list-item-1 ltn__list-item-1-before clearfix">
                            <li>Live Music Cocerts at Luviana Hotel</li>
                            <li>Live Music Cocerts at Luviana Hotel</li>
                            <li>Live Music Cocerts at Luviana Hotel</li>
                            <li>Live Music Cocerts at Luviana Hotel</li>
                        </ul>
                        <ul class="ltn__list-item-2 ltn__list-item-2-before ltn__flat-info">
                            <li><span>4 <i class="flaticon-bed"></i></span>
                                Bedrooms
                            </li>
                            <li><span>2 <i class="flaticon-clean"></i></span>
                                Bathrooms
                            </li>
                            <li><span>2 <i class="flaticon-car"></i></span>
                                Car parking
                            </li>
                            <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                square Ft
                            </li>
                        </ul>
                        <ul class="ltn__list-item-2 ltn__list-item-2-before--- ltn__list-item-2-img mb-50">
                            <li>
                                <a href="{{asset('theme/img/img-slide/11.jpg')}}" data-rel="lightcase:myCollection">
                                    <img src="{{asset('theme/img/img-slide/11.jpg')}}" alt="Image">
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('theme/img/img-slide/12.jpg')}}" data-rel="lightcase:myCollection">
                                    <img src="{{asset('theme/img/img-slide/12.jpg')}}" alt="Image">
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('theme/img/img-slide/13.jpg')}}" data-rel="lightcase:myCollection">
                                    <img src="{{asset('theme/img/img-slide/13.jpg')}}" alt="Image">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-right">
                        <img src="{{asset('theme/img/others/9.png')}}" alt="About Us Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1 pt-120 pb-90 mb-120---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h6>
                        <h1 class="section-title">Our Main Focus</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter--- justify-content-center">
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house"></i></span> -->
                            <img src="{{asset('theme/img/icons/icon-img/21.png')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="https://olinkshomes.com/our-services">Buy a home</a></h3>
                            <p>over 100 Luxurious homes for sale available , we can match you with a house you will want to call home.</p>
                            <a class="ltn__service-btn" href="https://olinkshomes.com/our-services">Find A Home <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house-3"></i></span> -->
                            <img src="{{asset('theme/img/icons/icon-img/22.png')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="https://olinkshomes.com/our-services">Build a home</a></h3>
                            <p>over 100 Luxurious homes for sale available , we can match you with a house you will want to call home.</p>
                            <a class="ltn__service-btn" href="https://olinkshomes.com/our-services">Find A Home <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90 plr--7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Properties</h6>
                        <h1 class="section-title">Featured Listings</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1">
                <!-- ltn__product-item -->
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="{{asset('theme/img/product-3/1.jpg')}}" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green">For Rent</li>
                                </ul>
                            </div>
                            <div class="product-img-location-gallery">
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-img-gallery">
                                    <ul>
                                        <li>
                                            <a href="product-details.html"><i class="fas fa-camera"></i> 4</a>
                                        </li>
                                        <li>
                                            <a href="product-details.html"><i class="fas fa-film"></i> 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-price">
                                <span>$34,900<label>/Month</label></span>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-description">
                                <p>Beautiful Huge 1 Family House In Heart Of <br>
                                    Westbury. Newly Renovated With New Wood</p>
                            </div>
                            <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="flaticon-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="flaticon-clean"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                    square Ft
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="{{asset('theme/img/blog/author.jpg')}}" alt="#"></a>
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
                                        <a href="product-details.html" title="Product Details">
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
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="{{asset('theme/img/product-3/2.jpg')}}" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green---">For Sale</li>
                                </ul>
                            </div>
                            <div class="product-img-location-gallery">
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-img-gallery">
                                    <ul>
                                        <li>
                                            <a href="product-details.html"><i class="fas fa-camera"></i> 4</a>
                                        </li>
                                        <li>
                                            <a href="product-details.html"><i class="fas fa-film"></i> 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-price">
                                <span>$34,900<label>/Month</label></span>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">Modern Apartments</a></h2>
                            <div class="product-description">
                                <p>Beautiful Huge 1 Family House In Heart Of <br>
                                    Westbury. Newly Renovated With New Wood</p>
                            </div>
                            <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="flaticon-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="flaticon-clean"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                    square Ft
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="{{asset('theme/img/blog/author.jpg')}}" alt="#"></a>
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
                                        <a href="product-details.html" title="Product Details">
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
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="{{asset('theme/img/product-3/3.jpg')}}" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green">For Rent</li>
                                </ul>
                            </div>
                            <div class="product-img-location-gallery">
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-img-gallery">
                                    <ul>
                                        <li>
                                            <a href="product-details.html"><i class="fas fa-camera"></i> 4</a>
                                        </li>
                                        <li>
                                            <a href="product-details.html"><i class="fas fa-film"></i> 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-price">
                                <span>$34,900<label>/Month</label></span>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">Comfortable Apartment</a></h2>
                            <div class="product-description">
                                <p>Beautiful Huge 1 Family House In Heart Of <br>
                                    Westbury. Newly Renovated With New Wood</p>
                            </div>
                            <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="flaticon-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="flaticon-clean"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                    square Ft
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="{{asset('theme/img/blog/author.jpg')}}" alt="#"></a>
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
                                        <a href="product-details.html" title="Product Details">
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
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="{{asset('theme/img/product-3/4.jpg')}}" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green">For Rent</li>
                                </ul>
                            </div>
                            <div class="product-img-location-gallery">
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-img-gallery">
                                    <ul>
                                        <li>
                                            <a href="product-details.html"><i class="fas fa-camera"></i> 4</a>
                                        </li>
                                        <li>
                                            <a href="product-details.html"><i class="fas fa-film"></i> 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-price">
                                <span>$34,900<label>/Month</label></span>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">Luxury villa in Rego Park </a></h2>
                            <div class="product-description">
                                <p>Beautiful Huge 1 Family House In Heart Of <br>
                                    Westbury. Newly Renovated With New Wood</p>
                            </div>
                            <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="flaticon-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="flaticon-clean"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                    square Ft
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="{{asset('theme/img/blog/author.jpg')}}" alt="#"></a>
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
                                        <a href="product-details.html" title="Product Details">
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
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="{{asset('theme/img/product-3/5.jpg')}}" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green">For Rent</li>
                                </ul>
                            </div>
                            <div class="product-img-location-gallery">
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-img-gallery">
                                    <ul>
                                        <li>
                                            <a href="product-details.html"><i class="fas fa-camera"></i> 4</a>
                                        </li>
                                        <li>
                                            <a href="product-details.html"><i class="fas fa-film"></i> 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-price">
                                <span>$34,900<label>/Month</label></span>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">Beautiful Flat in Manhattan </a></h2>
                            <div class="product-description">
                                <p>Beautiful Huge 1 Family House In Heart Of <br>
                                    Westbury. Newly Renovated With New Wood</p>
                            </div>
                            <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span>3 <i class="flaticon-bed"></i></span>
                                    Bedrooms
                                </li>
                                <li><span>2 <i class="flaticon-clean"></i></span>
                                    Bathrooms
                                </li>
                                <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                    square Ft
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="{{asset('theme/img/blog/author.jpg')}}" alt="#"></a>
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
                                        <a href="product-details.html" title="Product Details">
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
    <!-- PRODUCT SLIDER AREA END -->

    <!-- APARTMENTS PLAN AREA START -->
    <div class="ltn__apartments-plan-area pt-115--- pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Apartment Sketch</h6>
                        <h1 class="section-title">Apartments Plan</h1>
                    </div>
                    <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center">
                        <div class="nav">
                            <a data-bs-toggle="tab" href="#liton_tab_3_1">The Studio</a>
                            <a class="active show"  data-bs-toggle="tab" href="#liton_tab_3_2">Deluxe Portion</a>
                            <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">Penthouse</a>
                            <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">Top Garden</a>
                            <a data-bs-toggle="tab" href="#liton_tab_3_5" class="">Double Height</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="liton_tab_3_1">
                            <div class="ltn__apartments-tab-content-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                            <h2>The Studio</h2>
                                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                sed ayd minim veniam.</p>
                                            <div class="apartments-info-list apartments-info-list-color mt-40">
                                                <ul>
                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                    <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-img">
                                            <img src="{{asset('theme/img/others/10.png')}}" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="liton_tab_3_2">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                            <h2>Deluxe Portion</h2>
                                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                sed ayd minim veniam.</p>
                                            <div class="apartments-info-list apartments-info-list-color mt-40">
                                                <ul>
                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                    <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-img">
                                            <img src="{{asset('theme/img/others/10.png')}}" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_3">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                            <h2>Penthouse</h2>
                                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                sed ayd minim veniam.</p>
                                            <div class="apartments-info-list apartments-info-list-color mt-40">
                                                <ul>
                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                    <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-img">
                                            <img src="{{asset('theme/img/others/10.png')}}" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_4">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                            <h2>Top Garden</h2>
                                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                sed ayd minim veniam.</p>
                                            <div class="apartments-info-list apartments-info-list-color mt-40">
                                                <ul>
                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                    <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-img">
                                            <img src="{{asset('theme/img/others/10.png')}}" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_5">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info ltn__secondary-bg text-color-white">
                                            <h2>Double Height</h2>
                                            <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                sed ayd minim veniam.</p>
                                            <div class="apartments-info-list apartments-info-list-color mt-40">
                                                <ul>
                                                    <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                    <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                    <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                    <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                    <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-img">
                                            <img src="{{asset('theme/img/others/10.png')}}" alt="#">
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
    <!-- APARTMENTS PLAN AREA END -->

    <!-- VIDEO AREA START -->
    <div class="ltn__video-popup-area ltn__video-popup-margin---">
        <div class="ltn__video-bg-img ltn__video-popup-height-600--- bg-overlay-black-30 bg-image bg-fixed ltn__animation-pulse1" data-bs-bg="{{asset('theme/img/bg/19.jpg')}}">
            <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&amp;showinfo=0" data-rel="lightcase:myCollection">
                <i class="fa fa-play"></i>
            </a>
        </div>
    </div>
    <!-- VIDEO AREA END -->

    <!-- CATEGORY AREA START -->
    <div class="ltn__category-area section-bg-1-- ltn__primary-bg before-bg-1 bg-image bg-overlay-theme-black-5--0 pt-115 pb-90 d-none" data-bs-bg="img/bg/5.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color">Top Categories</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__category-slider-active slick-arrow-1">
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-4 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <i class="flaticon-car"></i>
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h4><a href="shop.html">Parking Space</a></h4>
                        </div>
                        <div class="ltn__category-item-btn">
                            <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-4 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <i class="flaticon-car"></i>
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h4><a href="shop.html">Parking Space</a></h4>
                        </div>
                        <div class="ltn__category-item-btn">
                            <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-4 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <i class="flaticon-car"></i>
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h4><a href="shop.html">Parking Space</a></h4>
                        </div>
                        <div class="ltn__category-item-btn">
                            <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-4 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <i class="flaticon-car"></i>
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h4><a href="shop.html">Parking Space</a></h4>
                        </div>
                        <div class="ltn__category-item-btn">
                            <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-4 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <i class="flaticon-car"></i>
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h4><a href="shop.html">Parking Space</a></h4>
                        </div>
                        <div class="ltn__category-item-btn">
                            <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-4 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <i class="flaticon-car"></i>
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h4><a href="shop.html">Parking Space</a></h4>
                        </div>
                        <div class="ltn__category-item-btn">
                            <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CATEGORY AREA END -->

    <!-- CATEGORY AREA START -->
    <div class="ltn__category-area ltn__product-gutter section-bg-1--- pt-115 pb-90 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Aminities</h6>
                        <h1 class="section-title">Building Aminities</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__category-slider-active--- slick-arrow-1 justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__category-item ltn__category-item-5 text-center">
                        <a href="shop.html">
                            <span class="category-icon"><i class="flaticon-car"></i></span>
                            <span class="category-title">Parking Space</span>
                            <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__category-item ltn__category-item-5 text-center">
                        <a href="shop.html">
                            <span class="category-icon"><i class="flaticon-swimming"></i></span>
                            <span class="category-title">Swimming Pool</span>
                            <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__category-item ltn__category-item-5 text-center">
                        <a href="shop.html">
                            <span class="category-icon"><i class="flaticon-secure-shield"></i></span>
                            <span class="category-title">Private Security</span>
                            <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__category-item ltn__category-item-5 text-center">
                        <a href="shop.html">
                            <span class="category-icon"><i class="flaticon-stethoscope"></i></span>
                            <span class="category-title">Medical Center</span>
                            <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__category-item ltn__category-item-5 text-center">
                        <a href="shop.html">
                            <span class="category-icon"><i class="flaticon-book"></i></span>
                            <span class="category-title">Library Area</span>
                            <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__category-item ltn__category-item-5 text-center">
                        <a href="shop.html">
                            <span class="category-icon"><i class="flaticon-bed-1"></i></span>
                            <span class="category-title">King Size Beds</span>
                            <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__category-item ltn__category-item-5 text-center">
                        <a href="shop.html">
                            <span class="category-icon"><i class="flaticon-home-2"></i></span>
                            <span class="category-title">Smart Homes</span>
                            <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__category-item ltn__category-item-5 text-center">
                        <a href="shop.html">
                            <span class="category-icon"><i class="flaticon-slider"></i></span>
                            <span class="category-title">Kid’s Playland</span>
                            <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CATEGORY AREA END -->

    <!-- BRAND LOGO AREA START -->
    <div class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-1 pt-290 pb-110 plr--9 d-none">
        <div class="container-fluid">
            <div class="row ltn__brand-logo-active">
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('theme/img/brand-logo/1.png')}}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('theme/img/brand-logo/2.png')}}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('theme/img/brand-logo/3.png')}}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('theme/img/brand-logo/4.png')}}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('theme/img/brand-logo/5.png')}}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('theme/img/brand-logo/3.png')}}" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND LOGO AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
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
    </div>
    <!-- CALL TO ACTION END -->

    @endsection
