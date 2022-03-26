@extends('front.master-homes')
@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="{{asset('theme/img/bg/14.jpg')}} ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Listed Homes</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Olinks Homes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
<!-- PRODUCT DETAILS AREA START -->
<div class="ltn__product-area ltn__product-gutter mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__shop-options">
                    <ul>
                        <li>
                            <div class="ltn__grid-list-tab-menu ">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                    <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                </div>
                            </div>
                        </li>
                        <li>
                           <div class="short-by text-center">
                                <select class="nice-select">
                                    <option>Default sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by new arrivals</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                            </div>
                        </li>
                        <li>
                           <div class="showing-product-number text-right">
                                <span>Showing 9 of 20 results</span>
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
                                @foreach ($Homes as $homes)
                                <!-- ltn__product-item -->
                                <div class="col-lg-4 col-sm-6 col-12">
                                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                        <div class="product-img">
                                            <a href="{{url('/')}}/olinks-homes/{{$homes->slung}}"><img src="{{env('LANDING')}}/uploads/homes/{{$homes->fb_pixels}}" alt="#"></a>
                                            {{-- <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="#"><img src="img/blog/author.jpg" alt="#"></a>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="product-info">
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="sale-badg">@if($homes->sold == "In Stock") Available @else Sold @endif</li>
                                                </ul>
                                            </div>
                                            <h2 class="product-title"><a href="{{url('/')}}/olinks-homes/{{$homes->slung}}">{{$homes->title}}</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a target="new" href="{{$homes->map}}"><i class="flaticon-pin"></i> {{$homes->location}}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info-bottom">
                                            <div class="product-price">
                                                <span>From KES{{$homes->price}}</label></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
                                @foreach ($Homes as $homes)
                                <!-- ltn__product-item -->
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                        <div class="product-img">
                                            <a href="{{url('/')}}/olinks-homes/{{$homes->slung}}"><img src="{{env('LANDING')}}/uploads/homes/{{$homes->fb_pixels}}" alt="#"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-badge-price">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">@if($homes->sold == "In Stock") Available @else Sold @endif</li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>From<label>KES {{$homes->price}}</label></span>
                                                </div>
                                            </div>
                                            <h2 class="product-title"><a href="{{url('/')}}/olinks-homes/{{$homes->slung}}">{{$homes->title}}</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a target="new" href="{{$homes->map}}"><i class="flaticon-pin"></i> {{$homes->title}} </a>
                                                    </li>
                                                    <li>
                                                        <a target="new" href="{{$homes->map}}"> {{$homes->meta}} </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="product-info-bottom">


                                        </div>
                                    </div>
                                </div>
                                <!-- ltn__product-item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="ltn__pagination-area text-center">
                    <div class="ltn__pagination">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT DETAILS AREA END -->
@endsection
