@extends('layouts.app')
@section('title', 'contact')
@section('content')

<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('assets/images/contact-bg.jpg')">
        			<h1 class="page-title text-white">Contact us<span class="text-white">keep in touch with us</span></h1>
	        	</div><!-- End .page-header -->
            </div><!-- End .container -->

            <div class="page-content pb-0">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-6 mb-2 mb-lg-0">
                			<h2 class="title mb-1">Contact Information</h2><!-- End .title mb-2 -->
                			<p class="mb-3">They work on a crowd sourced marketplace model with the Posters willing to outsource small-doable tasks, connected to Taskers who are willing to take up those tasks.</p>
                			<div class="row">
                				<div class="col-sm-7">
                					<div class="contact-info">
                						<h3>The Office</h3>

                						<ul class="contact-list">
                							<li>
                								<i class="icon-map-marker"></i>
	                							Kigali city, Rwanda
	                						</li>
                							<li>
                								<i class="icon-phone"></i>
                								<a href="tel:#">+250 123 456 789</a>
                							</li>
                							<li>
                								<i class="icon-envelope"></i>
                								<a href="mailto:#">info@indege.com</a>
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-7 -->

                				<div class="col-sm-5">
                					<div class="contact-info">
                						<h3>The Office</h3>

                						<ul class="contact-list">
                							<li>
                								<i class="icon-clock-o"></i>
	                							<span class="text-dark">Monday-Saturday</span> <br>11am-7pm 
	                						</li>
                							<li>
                								<i class="icon-calendar"></i>
                								<span class="text-dark">Sunday</span> <br>11am-6pm 
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-5 -->
                			</div><!-- End .row -->
                		</div><!-- End .col-lg-6 -->
                		<div class="col-lg-6">
                			<h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->
                			<p class="mb-2">Use the form below to get in touch with the sales team</p>

                			<form action="/send_contact" method="POST" enctype="multipart/form-data" class="contact-form mb-3">
                				@csrf
                            <div class="row">
                					<div class="col-sm-6">
                                        <label for="cname" class="sr-only">Name</label>
                						<input type="text" name="names" class="form-control" id="name" placeholder="Name *" required>
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6">
                                        <label for="cemail" class="sr-only">Email</label>
                						<input type="email" name="email" class="form-control" id="email" placeholder="Email *" required>
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                				<div class="row">
                					<div class="col-sm-6">
                                        <label for="cphone" class="sr-only">Phone</label>
                						<input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone">
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6">
                                        <label for="csubject" class="sr-only">Subject</label>
                						<input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                                <label for="cmessage" class="sr-only">Message</label>
                				<textarea class="form-control" name="message" cols="30" rows="4" id="message" required placeholder="Message *"></textarea>

                				<button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                					<span>SUBMIT</span>
            						<i class="icon-long-arrow-right"></i>
                				</button>
                			</form><!-- End .contact-form -->
                		</div><!-- End .col-lg-6 -->
                	</div><!-- End .row -->

                	<hr class="mt-4 mb-5">

                </div><!-- End .container -->
            	<div id="map"></div><!-- End #map -->
            </div><!-- End .page-content -->

@endsection