@extends('layouts.admin')
@section('title', 'create post')
@section('content')
<div class="container-fluid">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <div class="row justify-content-center">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">@yield('title')</h1>
                    </div>
                    <form action="/job_post" method="POST" enctype="multipart/form-data" class="user">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
		                						<label>Job title *</label>
		                						<input type="text" id="job_title" name="job_title" class="form-control form-control-user" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Job Poster *</label>
		                						<input type="text" id="job_poster" name="job_poster" class="form-control form-control-user" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

                                        <div class="row">
		                					<div class="col-sm-6">
                                                <label>Phone number</label>
	            						        <input type="text" id="phone" name="phone" class="form-control form-control-user">
                                            </div>
                                            <div class="col-sm-6">
	            						        <label>Amount paid *</label>
	            						        <input type="text" id="amount" name="amount" class="form-control form-control-user" required>
                                            </div>
                                        </div>
                                        <div class="row">
		                					<div class="col-sm-6">
	            						        <label>Job Type *</label>
	            						        <input type="text" id="job_type" name="job_type" class="form-control form-control-user" placeholder="eg: plumbing, cleaning & moving" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Job Address *</label>
                                                <input type="text" id="location" name="location" class="form-control form-control-user" placeholder="Appartments, suite, unit etc ..." required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Payment mode</label>
                                                <input type="text" id="payment_mode" name="payment_mode" class="form-control form-control-user" placeholder="your payment mode" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Job description (optional)</label>
	        							        <textarea class="form-control form-control-user" id="description" name="description" cols="30" rows="4" placeholder="Tell us about your job, e.g. special notes for job"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-primary btn-user btn-block">
		                					
                                        <span class="btn-hover-text">Proceed to post</span>
		                				</button>
		                		</div>
		                	</div>
            			</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection