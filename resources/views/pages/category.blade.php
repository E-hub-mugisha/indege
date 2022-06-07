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
                                        <img src="{{ URL::asset('assets/images/job.png') }}" alt="Product image" class="product-image">
                                    </a>

                                    
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">{{ $jobs->job_type }}</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="/product/{{ $jobs->job_title }}">{{ $jobs->job_title }}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        Rwf: {{ $jobs->amount}}
                                    </div><!-- End .product-price -->
                                    
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



