@extends('frontend.master')
@section('content')
    <!-- start of .intro-section -->
        @include('frontend.home.home_slider')
    <!-- End of .intro-section -->

    <div class="container">
        <!-- start of Iocn Box Wrapper -->
            @include('frontend.home.iconbox')
        <!-- End of Iocn Box Wrapper -->

        <!-- start of Category Banner Wrapper -->
            @include('frontend.home.categorybanner')
        <!-- End of Category Banner Wrapper -->

        <!-- start of Deals Wrapper -->
            @include('frontend.home.hotdeal')
        <!-- End of Deals Wrapper -->
    </div>

    <!-- start of .category-section top-category -->
        @include('frontend.home.category')
    <!-- End of .category-section top-category -->

    <div class="container">
        <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate">Popular Departments
        </h2>
        <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
            <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li class="nav-item mr-2 mb-2">
                    <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1">New arrivals</a>
                </li>
                <li class="nav-item mr-2 mb-2">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">Best seller</a>
                </li>
                <li class="nav-item mr-2 mb-2">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-3">most popular</a>
                </li>
                <li class="nav-item mr-0 mb-2">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-4">Featured</a>
                </li>
            </ul>
        </div>
        <!-- End of Tab -->
        <div class="tab-content product-wrapper appear-animate">
            <div class="tab-pane active pt-4" id="tab1-1">
                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-1-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-1-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$53.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s White
                                        Handbag</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.62</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-3.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">7% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                        iPhone</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">136.26</ins>
                                    <del class="old-price">$145.90</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-4-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-4-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.55 - $29.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-5.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">4% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$243.30</ins>
                                    <del class="old-price">$253.50</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-6-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-6-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$32.00 - $33.26</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-7.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$260.59 - $297.83</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-8-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-8-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$45.90</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-9.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                    </a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$64.47</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-10.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$173.84</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Tab Pane -->
            <div class="tab-pane pt-4" id="tab1-2">
                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-4-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-4-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.55 - $29.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-3.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">7% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                        iPhone</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">136.26</ins>
                                    <del class="old-price">$145.90</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-8-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-8-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$45.90</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-9.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                    </a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$64.47</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-5.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">4% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$243.30</ins>
                                    <del class="old-price">$253.50</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-6-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-6-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$32.00 - $33.26</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-7.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$260.59 - $297.83</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-1-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-1-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$53.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s White
                                        Handbag</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.62</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-10.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$173.84</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Tab Pane -->
            <div class="tab-pane pt-4" id="tab1-3">
                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-9.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                    </a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$64.47</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-1-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-1-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$53.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-3.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">7% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                        iPhone</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">136.26</ins>
                                    <del class="old-price">$145.90</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s White
                                        Handbag</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.62</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-10.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$173.84</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-8-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-8-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$45.90</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-5.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">4% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$243.30</ins>
                                    <del class="old-price">$253.50</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-7.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$260.59 - $297.83</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-6-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-6-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$32.00 - $33.26</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-4-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-4-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.55 - $29.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Tab Pane -->
            <div class="tab-pane pt-4" id="tab1-4">
                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-4-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-4-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.55 - $29.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-10.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$173.84</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-9.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                    </a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$64.47</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-8-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-8-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$45.90</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s White
                                        Handbag</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.62</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-5.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">4% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$243.30</ins>
                                    <del class="old-price">$253.50</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-3.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">7% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                        iPhone</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">136.26</ins>
                                    <del class="old-price">$145.90</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-7.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$260.59 - $297.83</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-6-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-6-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$32.00 - $33.26</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-1-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/3-1-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$53.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Tab Pane -->
        </div>
        <!-- End of Tab Content -->


        <!-- End of Category Cosmetic Lifestyle -->
            @include('frontend.home.categorybanner2')
        <!-- End of Category Cosmetic Lifestyle -->


        <div class="product-wrapper-1 appear-animate mb-5">
            <div class="title-link-wrapper pb-1 mb-4">
                <h2 class="title ls-normal mb-0">Clothing & Apparel</h2>
                <a href="shop-boxed-banner.html" class="font-size-normal font-weight-bold ls-25 mb-0">More
                    Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 mb-4">
                    <div class="banner h-100 br-sm" style="background-image: url({{asset('frontend/assets/images/demos/demo1/banners/2.jpg')}}); 
                        background-color: #ebeced;">
                        <div class="banner-content content-top">
                            <h5 class="banner-subtitle font-weight-normal mb-2">Weekend Sale</h5>
                            <hr class="banner-divider bg-dark mb-2">
                            <h3 class="banner-title font-weight-bolder ls-25 text-uppercase">
                                New Arrivals<br> <span
                                    class="font-weight-normal text-capitalize">Collection</span>
                            </h3>
                            <a href="shop-banner-sidebar.html"
                                class="btn btn-dark btn-outline btn-rounded btn-sm">shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- End of Banner -->
                <div class="col-lg-9 col-sm-8">
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '992': {
                                'slidesPerView': 3
                            },
                            '1200': {
                                'slidesPerView': 4
                            }
                        }
                    }">
                        <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/4-1.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Men’s
                                                Clothing</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$23.99</ins><del
                                                class="old-price">$25.68</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/4-5-1.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/4-5-2.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Best Travel
                                                Bag</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$25.68</ins><del
                                                class="old-price">$28.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/4-2-1.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/4-2-2.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s Fashion
                                                Handbag </a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$25.68</ins><del
                                                class="old-price">$25.89</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/4-6.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Gray Leather
                                                Shoes</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.88</ins><del
                                                class="old-price">$27.89</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/4-3.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Black Winter
                                                Skating</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$40.86</ins><del
                                                class="old-price">$45.89</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/4-7.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Men's Black
                                                Wrist
                                                Watch</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$135.60</ins><del
                                                class="old-price">$155.70</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/4-4-1.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/4-4-2.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Sport Women's
                                                Wear</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$220.20</ins><del
                                                class="old-price">$300.62</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/4-8.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s Hiking
                                                Hat</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$53.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Product Wrapper 1 -->

        <div class="product-wrapper-1 appear-animate mb-8">
            <div class="title-link-wrapper pb-1 mb-4">
                <h2 class="title ls-normal mb-0">Consumer Electric</h2>
                <a href="shop-boxed-banner.html" class="font-size-normal font-weight-bold ls-25 mb-0">More
                    Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 mb-4">
                    <div class="banner h-100 br-sm" style="background-image: url({{asset('frontend/assets/images/demos/demo1/banners/3.jpg')}}); 
                    background-color: #252525;">
                        <div class="banner-content content-top">
                            <h5 class="banner-subtitle text-white font-weight-normal mb-2">New Collection</h5>
                            <hr class="banner-divider bg-white mb-2">
                            <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">
                                Top Camera <br> <span
                                    class="font-weight-normal text-capitalize">Mirrorless</span>
                            </h3>
                            <a href="shop-banner-sidebar.html"
                                class="btn btn-white btn-outline btn-rounded btn-sm">shop now</a>
                        </div>
                    </div>
                </div>
                <!-- End of Banner -->
                <div class="col-lg-9 col-sm-8">
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '992': {
                                'slidesPerView': 3
                            },
                            '1200': {
                                'slidesPerView': 4
                            }
                        }
                    }">
                        <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/5-1-1.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/5-1-2.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">6% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Professional
                                                Pixel
                                                Camera</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$215.68</ins><del
                                                class="old-price">$230.45</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/5-5.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Latest
                                                Speaker</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$250.68</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/5-2-1.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/5-2-2.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Wash Machine</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(9
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$215.68</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/5-6.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Security
                                                Guard</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$320.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/5-3.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">10% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">HD
                                                Television</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$450.68</ins><del
                                                class="old-price">$500.00</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/5-7.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">10% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">USB Receipt</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.89</ins><del
                                                class="old-price">$29.79</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/5-4.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Data Transformer
                                                Tool</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(6
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$64.47</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/5-8.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">7% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi Functional
                                                Apple iPhone</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(9
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$136.26</ins><del
                                                class="old-price">$145.90</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <!-- End of Produts -->
                </div>
            </div>
        </div>
        <!-- End of Product Wrapper 1 -->

        <!-- start of Banner Fashion -->
            @include('frontend.home.banner3')
        <!-- End of Banner Fashion -->

        <div class="product-wrapper-1 appear-animate mb-7">
            <div class="title-link-wrapper pb-1 mb-4">
                <h2 class="title ls-normal mb-0">Home Garden & Kitchen</h2>
                <a href="shop-boxed-banner.html" class="font-size-normal font-weight-bold ls-25 mb-0">More
                    Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 mb-4">
                    <div class="banner h-100 br-sm" style="background-image: url({{asset('frontend/assets/images/demos/demo1/banners/5.jpg')}}); 
                    background-color: #EAEFF3;">
                        <div class="banner-content content-top">
                            <h5 class="banner-subtitle font-weight-normal mb-2">Deals And Promotions</h5>
                            <hr class="banner-divider bg-dark mb-2">
                            <h3 class="banner-title font-weight-bolder text-uppercase ls-25">
                                Trending <br> <span class="font-weight-normal text-capitalize">House
                                    Utensil</span>
                            </h3>
                            <a href="shop-banner-sidebar.html"
                                class="btn btn-dark btn-outline btn-rounded btn-sm">shop now</a>
                        </div>
                    </div>
                </div>
                <!-- End of Banner -->
                <div class="col-lg-9 col-sm-8">
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '992': {
                                'slidesPerView': 3
                            },
                            '1200': {
                                'slidesPerView': 4
                            }
                        }
                    }">
                        <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/6-1.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Home Sofa</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$75.99</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/6-5.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Electric
                                                Rice-Cooker</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$215.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/6-2-1.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/6-2-2.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">21% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Kitchen
                                                Table</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(9
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$75.50</ins><del
                                                class="old-price">$95.68</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/6-6.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Kitchen
                                                Cooker</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$150.60</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/6-3-1.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/6-3-2.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Table Lamp</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$45.60</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/6-7.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">12% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Electric Frying
                                                Pan</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$137.35</ins><del
                                                class="old-price">$155.65</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/6-4.jpg')}}" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">18% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Latest Chair</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(6
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$70.00</ins><del
                                                class="old-price">$85.00</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/6-8-1.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                            <img src="{{asset('frontend/assets/images/demos/demo1/products/6-8-2.jpg')}}"
                                                alt="Product" width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Automatic
                                                Crusher</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(9
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$220.25</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <!-- End of Produts -->
                </div>
            </div>
        </div>
        <!-- End of Product Wrapper 1 -->

        <!-- start of Brands Wrapper -->
            @include('frontend.home.vendor')
        <!-- End of Brands Wrapper -->

        <!-- start blog Wrapper -->
            @include('frontend.home.blog')
        <!-- end blog Wrapper -->

        <h2 class="title title-underline mb-4 ls-normal appear-animate">Your Recent Views</h2>
        <div class="swiper-container swiper-theme shadow-swiper appear-animate pb-4 mb-8" data-swiper-options="{
            'spaceBetween': 20,
            'slidesPerView': 2,
            'breakpoints': {
                '576': {
                    'slidesPerView': 3
                },
                '768': {
                    'slidesPerView': 5
                },
                '992': {
                    'slidesPerView': 6
                },
                '1200': {
                    'slidesPerView': 8
                }
            }
            }">
            <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-2">
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{asset('frontend/assets/images/demos/demo1/products/7-1.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Women's Fashion Handbag</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{asset('frontend/assets/images/demos/demo1/products/7-2.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Electric Frying Pan</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{asset('frontend/assets/images/demos/demo1/products/7-3.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Black Winter Skating</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{asset('frontend/assets/images/demos/demo1/products/7-4.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">HD Television</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{asset('frontend/assets/images/demos/demo1/products/7-5.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Home Sofa</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{asset('frontend/assets/images/demos/demo1/products/7-6.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">USB Receipt</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{asset('frontend/assets/images/demos/demo1/products/7-7.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Electric Rice-Cooker</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{asset('frontend/assets/images/demos/demo1/products/7-8.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Table Lamp</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- End of Reviewed Producs -->
    </div>
    <!--End of Catainer -->
@endsection