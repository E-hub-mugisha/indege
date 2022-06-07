@extends('layouts.app')
@section('title', 'task')
@section('content')

            <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
                <div class="container">
                    <h1 class="page-title">Tasks</h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">task</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			<form action="/post_job" method="POST" enctype="multipart/form-data">
                            @csrf
		                	<div class="row justify-content-center">
		                		<div class="col-lg-7">
		                			<h2 class="checkout-title">Job filling form</h2><!-- End .checkout-title -->
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Job title *</label>
		                						<input type="text" id="job_title" name="job_title" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Job Poster *</label>
		                						<input type="text" id="job_poster" name="job_poster" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

                                        <div class="row">
		                					<div class="col-sm-6">
                                                <label>Phone number</label>
	            						        <input type="text" id="phone" name="phone" class="form-control">
                                            </div>
                                            <div class="col-sm-6">
	            						        <label>Amount paid *</label>
	            						        <input type="text" id="amount" name="amount" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
		                					<div class="col-sm-6">
	            						        <label>Job Type *</label>
	            						        <input type="text" id="job_type" name="job_type" class="form-control" placeholder="eg: plumbing, cleaning & moving" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Job Address *</label>
                                                <input type="text" id="location" name="location" class="form-control" placeholder="Appartments, suite, unit etc ..." required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Payment mode</label>
                                                <input type="text" id="payment_mode" name="payment_mode" class="form-control" placeholder="your payment mode" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Job description (optional)</label>
	        							        <textarea class="form-control" id="description" name="description" cols="30" rows="4" placeholder="Tell us about your job, e.g. special notes for job"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Preview</span>
		                					<span class="btn-hover-text">Proceed to post</span>
		                				</button>
		                		</div><!-- End .col-lg-9 -->
		                		<!-- <aside class="col-lg-5">
		                			<div class="summary">
		                				<h3 class="summary-title">Your job preview</h3>

		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>job name</th>
		                							<th>name</th>
		                						</tr>
		                					</thead>

		                					<tbody>
		                						<tr>
		                							<td><a href="#">Beige knitted elastic runner shoes</a></td>
		                							<td>$84.00</td>
		                						</tr>

		                						<tr>
		                							<td><a href="#">Blue utility pinafore denimdress</a></td>
		                							<td>$76,00</td>
		                						</tr>
		                						<tr class="summary-subtotal">
		                							<td>Subtotal:</td>
		                							<td>$160.00</td>
		                						</tr>
		                						<tr>
		                							<td>Shipping:</td>
		                							<td>Free shipping</td>
		                						</tr>
		                						<tr class="summary-total">
		                							<td>Total:</td>
		                							<td>$160.00</td>
		                						</tr>
		                					</tbody>
		                				</table>

		                				<div class="accordion-summary" id="accordion-payment">
										    <div class="card">
										        <div class="card-header" id="heading-1">
										            <h2 class="card-title">
										                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										                    Direct bank transfer
										                </a>
										            </h2>
										        </div>
										        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
										            <div class="card-body">
										                Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
										            </div>
										        </div>
										    </div>

										    <div class="card">
										        <div class="card-header" id="heading-2">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										                    Check payments
										                </a>
										            </h2>
										        </div>
										        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
										            <div class="card-body">
										                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. 
										            </div>
										        </div>
										    </div>

										    <div class="card">
										        <div class="card-header" id="heading-3">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										                    Cash on delivery
										                </a>
										            </h2>
										        </div>
										        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
										            <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. 
										            </div>
										        </div>
										    </div>
										    <div class="card">
										        <div class="card-header" id="heading-4">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
										                    PayPal <small class="float-right paypal-link">What is PayPal?</small>
										                </a>
										            </h2>
										        </div>
										        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
										            <div class="card-body">
										                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
										            </div>
										        </div>
										    </div>

										    <div class="card">
										        <div class="card-header" id="heading-5">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
										                    Credit Card (Stripe)
										                    <img src="assets/images/payments-summary.png" alt="payments cards">
										                </a>
										            </h2>
										        </div>
										        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
										            <div class="card-body"> Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
										            </div>
										        </div>
										    </div>
										</div>

		                				<button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Place Order</span>
		                					<span class="btn-hover-text">Proceed to Checkout</span>
		                				</button>
		                			</div>
		                		</aside> -->
		                	</div><!-- End .row -->
            			</form>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
            
@endsection