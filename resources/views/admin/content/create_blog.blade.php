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
                    <form action="/blogPost" method="POST" enctype="multipart/form-data" class="user">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
		                						<label>blog title *</label>
		                						<input type="text" id="title" name="title" class="form-control form-control-user" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

                                        <div class="row">
		                					<div class="col-sm-6">
                                                <label>image</label>
	            						        <input type="file" id="image" name="image" class="form-control form-control-user">
                                            </div>
                                            <div class="col-sm-6">
	            						        <label>category</label>
	            						        <input type="text" id="category" name="category" class="form-control form-control-user" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>content</label>
	        							        <textarea class="form-control form-control-user" id="content" name="content" cols="30" rows="4" placeholder="Tell us about your job, e.g. special notes for job"></textarea>
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