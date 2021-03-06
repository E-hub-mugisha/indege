@extends('layouts.app')
@section('title', 'search result')
@section('content')

<nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

<div class="page-content">
    <div class="container">
        <div class="products">
            <div class="row">
                @if($job->isNotEmpty())
                    @foreach ($job as $jobs)
                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="product">
                                <figure class="product-media">
                                    <span class="product-label label-new">New</span>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-1.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action action-icon-top">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">{{ $jobs->job_type }}</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="/product/{{ $jobs->job_title }}">{{ $jobs->job_title }}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        ${{ $jobs->amount}}
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                         <div class="ratings">
                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 0 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #cc9966;"><span class="sr-only">Color name</span></a>
                                        <a href="#" class="active" style="background: #ebebeb;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                    @endforeach
                @else
                <div class="load-more-container text-center">
                    <a href="#" class="btn btn-outline-darker btn-load-more">No search found <i class="icon-refresh"></i></a>
                </div><!-- End .load-more-container -->
                @endif
            </div><!-- End .products -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</div>
@endsection



