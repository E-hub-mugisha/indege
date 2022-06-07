@extends('layouts.app')
@section('title', 'services')
@section('content')

<nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-xl-4-5col">
                            

                            <div class="mb-3"></div><!-- End .mb-3 -->

                            <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

                            <div class="cat-blocks-container">
                                <div class="row">
                                @foreach($category as $jobs)
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <a href="/category/{{ $jobs->job_type }}" class="cat-block">
                                            <figure>
                                                <span>
                                                    <img src="assets/images/job.png" alt="Category image">
                                                </span>
                                            </figure>

                                            <h3 class="cat-block-title">{{ $jobs->job_type }}</h3><!-- End .cat-block-title -->
                                        </a>
                                    </div><!-- End .col-6 col-md-4 col-lg-3 -->
                                    @endforeach
                                </div><!-- End .row -->
                            </div><!-- End .cat-blocks-container -->

                            <div class="mb-2"></div><!-- End .mb-2 -->

                            

                            <div class="mb-4"></div><!-- End .mb-4 -->

                            <div class="toolbox">
                                <div class="toolbox-left">
                                    <div class="toolbox-info">
                                        10 Products found
                                    </div><!-- End .toolbox-info -->
                                </div><!-- End .toolbox-left -->

                                <div class="toolbox-right">
                                    <div class="toolbox-sort">
                                        <label for="sortby">Sort by:</label>
                                        <div class="select-custom">
                                            <select name="sortby" id="sortby" class="form-control">
                                                <option value="popularity" selected="selected">Most Popular</option>
                                                <option value="rating">Most Rated</option>
                                                <option value="date">Date</option>
                                            </select>
                                        </div>
                                    </div><!-- End .toolbox-sort -->
                                </div><!-- End .toolbox-right -->
                            </div><!-- End .toolbox -->

                            <div class="products mb-3">
                                <div class="row">
                                    @foreach($job as $jobs)
                                    <div class="col-6 col-md-4 col-xl-3">
                                        <div class="product">
                                            <figure class="product-media">
                                                <span class="product-label label-new">New</span>
                                                <a href="/product/{{ $jobs->job_title }}">
                                                    <img src="assets/images/job.png" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action">
                                                    <a href="/product/{{ $jobs->job_title }}" class="btn-product btn-cart" title="Add to cart"><span>Read more</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">{{ $jobs->job_type }}</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="/product/{{ $jobs->job_title }}">{{ $jobs->job_title }}</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    Rwf: {{ $jobs->amount }}
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <!-- <div class="ratings-val" style="width: 80%;"></div> -->
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text"><a href="/product/{{ $jobs->job_title }}">Read more...</a></span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-md-4 col-xl-3 -->
                                    @endforeach
                                    
                                </div><!-- End .row -->
                            </div><!-- End .products -->

                            <nav aria-label="Page navigation justify-content-center">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                            <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                        </a>
                                    </li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item-total">of 2</li>
                                    <li class="page-item">
                                        <a class="page-link page-link-next" href="#" aria-label="Next">
                                            Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- End .col-lg-9 -->

                        
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->

            

@endsection            