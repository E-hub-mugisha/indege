<!DOCTYPE html>
<html lang="en">


<!-- molla/index-4  22 Nov 2019 09:53:08 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Indege</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Indege">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('assets/images/icons/fav.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('assets/images/icons/fav.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('assets/images/icons/fav.png') }}">
    <link rel="manifest" href="{{ URL::asset('assets/images/icons/fav.png') }}">
    <link rel="mask-icon" href="{{ URL::asset('assets/images/icons/fav.png') }}" color="#666666">
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/icons/fav.png') }}">
    <meta name="apple-mobile-web-app-title" content="indege">
    <meta name="application-name" content="indege">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ URL::asset('assets/images/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins/jquery.countdown.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/skins/skin-demo-4.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/demos/demo-4.css') }}">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-4">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                    </div><!-- End .header-left -->
                    
                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Accounts</a> 
                                <ul>
                                    <div class="header-dropdown">
                                        @guest
                                        @if (Route::has('login'))
                                            <a href="{{ route('login') }}">{{ __('login')}}</a>
                                        @endif
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">{{ __('register') }}</a>
                                        @endif
                                                
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        @endguest
                                    </div><!-- End .header-menu -->
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="/" class="logo">
                            <img src="../assets/images/demos/demo-4/logo.png" alt="indege Logo" width="90" height="25">
                        </a>
                        
                    </div><!-- End .header-left -->
                
                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="active">
                                    <a href="/" class="sf">Home</a>
                                </li>
                                <li>
                                    <a href="/worker" class="sf">Workers</a>
                                </li>
                                <li>
                                    <a href="/services" class="sf">Services</a>
                                    
                                </li>
                                <li>
                                    <a href="/blog" class="sf">Our Blog</a>
                                </li>
                                <li>
                                    <a href="/about" class="sf">About us</a>
                                </li>
                                
                                <li>
                                    <a href="/contact" class="sf">Contact us</a>
                                    
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                        
                    </div><!-- End .header-center -->
                    <div class="header-right">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <form action="{{ route('search') }}" type="get" method="GET">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <!-- <label for="q" class="sr-only">Search</label> -->
                                    
                                    <input type="search" class="form-control" name="search" id="search" placeholder="Search product ..." required>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                        <div class="wishlist">
                            <a href="/task" class="btn btn-outline-primary" title="Wishlist">
                                <div class="icon">
                                    <i class="icon-plus"></i><span>Post Task</span>
                                </div>
                            </a>
                        </div><!-- End .compare-dropdown -->
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

        <main class="main">
            @yield('content')
        </main>
        <footer class="footer">
            <div class="cta bg-image bg-dark pt-4 pb-5 mb-0" style="background-image: url(../assets/images/demos/demo-4/bg-5.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <div class="cta-heading text-center">
                                <h3 class="cta-title text-white">Get The Latest News</h3><!-- End .cta-title -->
                                <p class="cta-desc text-white">and receive <span class="font-weight-normal">Updates</span></p><!-- End .cta-desc -->
                            </div><!-- End .text-center -->
                        
                            <form action="/subscribe" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group input-group-round">
                                    <input type="email" name="email" id="email" class="form-control form-control-white" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><span>Subscribe</span><i class="icon-long-arrow-right"></i></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                        </div><!-- End .col-sm-10 col-md-8 col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cta -->
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row text-center">
	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget widget-about">
                                
	            				<img src="../assets/images/demos/demo-4/logo.png" class="text-center footer-logo" alt="Footer Logo" width="105" height="25">
	            				<!-- <p>They work on a crowd sourced marketplace model with the Posters willing to outsource small-doable tasks, connected to Taskers who are willing to take up those tasks. </p> -->

	            				
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="/about">About Indege</a></li>
                                    <li><a href="/services">Our Services</a></li>
	            					<li><a href="/contact">Contact us</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Payment Methods</a></li>
	            					<li><a href="#">Terms and conditions</a></li>
	            					<li><a href="#">Privacy Policy</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Our contact</h4><!-- End .widget-title -->

	            				<div class="widget-call">
                                    <i class="icon-phone"></i>
                                    Got Question? Call us 24/7
                                    <a href="tel:#">+0123 456 789</a>         
                                </div><!-- End .widget-call -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container text-center">
	        		<p class="footer-copyright">Copyright © 2022 Indege. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>
            
            <form action="{{ route('search') }}" type="get" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="search" id="search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="/">Home</a>

                            </li>
                            <li>
                                <a href="/worker">Workers</a>
                            </li>
                            <li>
                                <a href="/about" class="sf">About us</a>
                                
                            </li>
                            <li>
                                <a href="/blog" class="sf">Our blog</a>
                            </li>
                            <li>
                                <a href="/services">Services</a>
                            </li>
                            <li>
                                <a href="/contact">Contact us</a>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                    
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">
                            @foreach(\App\Models\Jobs::query()->distinct()->get('job_type') as $jobs)
                                <li><a href="/category/{{ $jobs->job_type }}">{{ $jobs->job_type }}</a></li>
                            @endforeach
                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
            

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    

    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="../assets/images/demos/demo-4/logo.png" class="logo" alt="logo" width="60" height="15">
                            <h4 class="banner-title">Become a <span>tasker</span></h4>
                            <p>They work on a crowd sourced marketplace model with the Posters willing to outsource small-doable tasks, connected to Taskers who are willing to take up those tasks. </p>
                            <div class="input-group input-group-round">
                                <div class="input-group-append">
                                    <a class="btn" type="button" href="/become_worker"><span>Click Here</span></a>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="../assets/images/demos/demo-4/carpentry.jpg" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Plugins JS File -->
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/superfish.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    <script src="{{ URL::asset('assets/js/demos/demo-4.js') }}"></script>
</body>


</html>