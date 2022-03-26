@extends('front.master-homes')
@section('content')
@foreach ($Home as $home)
<div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0"  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">{{$home->title}}</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{url('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Olinks Homes</li>
                                <li>{{$home->title}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

<!-- IMAGE SLIDER AREA START (img-slider-3) -->
<div class="ltn__img-slider-area mb-90">
    <div class="container-fluid">

        <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
            {{-- Stream Gallery Here --}}
            <?php $Gallery = DB::table('galleries')->where('home_id',$home->id)->get(); ?>
            @foreach ($Gallery as $gallery)
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-4">
                    <a href="{{env('LANDING')}}/uploads/homes/{{$gallery->name}}" data-rel="lightcase:myCollection">
                        <img src="{{env('LANDING')}}/uploads/homes/{{$gallery->name}}" alt="{{$home->title}}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
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
                                <a href="#">@if($home->sold == "In Stock") Available @else Sold @endif</a>
                            </li>
                            <li class="ltn__blog-category">
                                <a class="bg-orange" href="#">
                                   <?php
                                       $Category = DB::table('categories')->where('id',$home->cat)->get();
                                    ?>
                                    @foreach ($Category as $category) {{$category->title}} @endforeach
                                </a>
                            </li>

                        </ul>
                    </div>
                    <h1>{{$home->location}}</h1>
                    <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span> Belmont Gardens, Chicago</label>
                    <h4 class="title-2">Description</h4>
                    {{-- Description  --}}
                    {!! html_entity_decode($home->content) !!}
                    <h4 class="title-2">Property Detail</h4>
                    <div class="property-detail-info-list section-bg-1 clearfix mb-60">
                        <ul>
                            <li><label>Property Name:</label> <span>{{$home->title}}</span></li>
                            <li><label>Home Area: </label> <span>120 sqft</span></li>
                            <li><label>Rooms:</label> <span>7</span></li>
                            <li><label>Baths:</label> <span>2</span></li>
                            <li><label>Year built:</label> <span>2022</span></li>
                        </ul>
                        <ul>
                            <li><label>Lot Area:</label> <span>HZ29 </span></li>
                            <li><label>Lot dimensions:</label> <span>120 sqft</span></li>
                            <li><label>Beds:</label> <span>7</span></li>
                            <li><label>Price:</label> <span>2</span></li>
                            <li><label>Property Status:</label> <span>@if($home->sold == "In Stock") Available @else Sold @endif</span></li>
                        </ul>
                    </div>

                    <h4 class="title-2">Facts and Features</h4>
                    <div class="property-detail-feature-list clearfix mb-45">
                        <?php $Facts = DB::table('facts')->where('property_id', $home->id)->get(); ?>
                        @foreach ($Facts as $facts)
                        <ul>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Living Room</h6>
                                        <small>{{$facts->living_room}}</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Garage</h6>
                                        <small>{{$facts->garage}}</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Dining Area</h6>
                                        <small>{{$facts->dining_area}}</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Bedroom</h6>
                                        <small>{{$facts->bedroom}}</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Bathroom</h6>
                                        <small>{{$facts->bathroom}}</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Gym Area</h6>
                                        <small>{{$facts->gym}}</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Garden</h6>
                                        <small>{{$facts->garden}}</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Parking</h6>
                                        <small>{{$facts->parking}}</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @endforeach
                    </div>




                    <h4 class="title-2">From Our Gallery</h4>
                    <div class="ltn__property-details-gallery mb-30">
                        <div class="row">
                            <?php $Gallery = DB::table('galleries')->where('home_id',$home->id)->get(); ?>
                            @foreach ($Gallery as $gallery)
                            <div class="col-md-4">
                                <a href="{{env('LANDING')}}/uploads/homes/{{$gallery->name}}" data-rel="lightcase:myCollection">
                                    <img class="mb-30" src="{{env('LANDING')}}/uploads/homes/{{$gallery->name}}" alt="Image">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <h4 class="title-2 mb-10">Amenities</h4>
                    <div class="property-details-amenities mb-60">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="ltn__menu-widget">
                                    <?php $Amenities = DB::table('amenities')->where('property_id',$home->id)->get(); ?>
                                    @foreach ($Amenities as $amen)
                                    <ul>
                                        <li>
                                            <label class="checkbox-item">Air Conditioning
                                                <input type="checkbox" checked="{{switcher($amen->air_conditioning)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Gym
                                                <input type="checkbox" checked="{{switcher($amen->gym)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Microwave
                                                <input type="checkbox" checked="{{switcher($amen->microwave)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Swimming Pool
                                                <input type="checkbox" checked="{{switcher($amen->swimming_pool)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">WiFi
                                                <input type="checkbox" checked="{{switcher($amen->wifi)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="ltn__menu-widget">
                                    <ul>
                                        <li>
                                            <label class="checkbox-item">Barbeque
                                                <input type="checkbox" checked="{{switcher($amen->barbeque)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Recreation
                                                <input type="checkbox" checked="{{switcher($amen->recreation)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Microwave
                                                <input type="checkbox" checked="{{switcher($amen->air_conditioning)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Basketball Cout
                                                <input type="checkbox" checked="{{switcher($amen->basketball_court)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Fireplace
                                                <input type="checkbox" checked="{{switcher($amen->fireplace)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="ltn__menu-widget">
                                    <ul>
                                        <li>
                                            <label class="checkbox-item">Refrigerator
                                                <input type="checkbox" checked="{{switcher($amen->refrigerator)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Window Coverings
                                                <input type="checkbox" checked="{{switcher($amen->window_coverings)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Washer
                                                <input type="checkbox" checked="{{switcher($amen->washer)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Elevators
                                                <input type="checkbox" checked="{{switcher($amen->elevator)}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="title-2">Location</h4>
                    <div class="property-details-google-map mb-60">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.345958317548!2d36.7980916!3d-1.2711251!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe3e8bd5c82eca045!2sOlinks%20Homes%20ShowHouse!5e0!3m2!1sen!2ske!4v1648281857723!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>



                    <h4 class="title-2">Property Video</h4>
                    <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50 bg-image mb-60" data-bs-bg="{{env('LANDING')}}/uploads/homes/{{$home->fb_pixels}}">
                        <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/eWUxqVFBq74?autoplay=1&amp;showinfo=0" data-rel="lightcase:myCollection">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
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
                    <div class="widget ltn__top-rated-product-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Top Rated Product</h4>
                        <ul>
                            <?php $HomesRelated = DB::table('homes')->where('cat',$home->cat)->get(); ?>
                            @foreach ($HomesRelated as $item)
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href="{{url('/')}}/olinks-homes/{{$item->slung}}"><img src="{{env('LANDING')}}/uploads/homes/{{$item->fb_pixels}}" alt="{{$item->title}}"></a>
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
                                        <h6><a href="{{url('/')}}/olinks-homes/{{$item->slung}}">{{$item->title}} </a></h6>
                                        <div class="product-price">
                                            <span>From KES {{$item->price}}</span>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Menu Widget (Category) -->
                    <div class="widget ltn__menu-widget ltn__menu-widget-2--- ltn__menu-widget-2-color-2---">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Top Categories</h4>
                        <ul>
                            <?php $Categories = DB::table('categories')->get(); ?>
                            @foreach($Categories as $categories)
                               <li><a href="#">{{$categories->title}} <span>(<?php echo count($HomesFetch = DB::table('homes')->where('cat',$categories->id)->get()) ?>)</span></a></li>
                            @endforeach
                        </ul>
                    </div>


                    <!-- Social Media Widget -->
                    <div class="widget ltn__social-media-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Follow us</h4>
                        <div class="ltn__social-media-2">
                            <ul>
                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Tagcloud Widget -->
                    <div class="widget ltn__tagcloud-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Popular Tags</h4>
                        <ul>
                            <?php $Services = DB::table('services')->get(); ?>
                            @foreach ($Services as $item)
                            <li><a href="{{env('LANDING')}}/our-services/{{$item->slung}}">{{$item->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget d-none">
                        <a href="shop.html"><img src="{{asset('theme/img/banner/2.jpg')}}" alt="#"></a>
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
                        <a href="product-details.html"><img src="{{asset('theme/img/product-3/1.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{asset('theme/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
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
                            <span>KES349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{asset('theme/img/product-3/2.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{asset('theme/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
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
                            <span>KES349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{asset('theme/img/product-3/3.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{asset('theme/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
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
                            <span>KES349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{asset('theme/img/product-3/4.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{asset('theme/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
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
                            <span>KES349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{asset('theme/img/product-3/5.jpg')}}" alt="#"></a>
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{asset('theme/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
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
                            <span>KES349,00<label>/Month</label></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->
@endforeach
@endsection
