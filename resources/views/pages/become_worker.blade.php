@extends('layouts.app')
@section('content')
<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Become<span>a worker</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">become a worker</a></li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			<form action="/become" method="POST" enctype="multipart/form-data">
                            @csrf
		                	<div class="row">
		                		<div class="col-lg-12">
		                			<h2 class="checkout-title">fill the form</h2><!-- End .checkout-title -->
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>ID number *</label>
		                						<input type="text" id="id_number" name="id_number" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Names *</label>
		                						<input type="text" id="names" name="names" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->
                                        <div class="row">
		                					<div class="col-sm-6">
		                						<label>Email *</label>
		                						<input type="text" id="email" name="email" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Phone *</label>
		                						<input type="text" id="phone" name="phone" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->
                                        <div class="row">
		                					<div class="col-sm-6">
		                						<label>Address *</label>
		                						<input type="text" id="address" name="address" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>image *</label>
		                						<input type="file" id="image" name="image" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Skills *</label>
		                						<input type="text" id="skills" name="skills" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Category *</label>
		                						<input type="text" id="category" name="category" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->
                                        <div class="row">
		                					<div class="col-sm-6">
		                						<label>Experience *</label>
		                						<input type="text" id="experience" name="experience" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>payment mode *</label>
		                						<input type="text" id="payment_mode" name="payment_mode" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->
	                					<label>Description</label>
	        							<textarea class="form-control" id="description" name="description" cols="30" rows="4" placeholder="Notes about your description"></textarea>
                                        <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Place Order</span>
		                					<span class="btn-hover-text">Proceed to Checkout</span>
		                				</button>
		                		</div><!-- End .col-lg-9 -->
		                	</div><!-- End .row -->
            			</form>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
            @endsection