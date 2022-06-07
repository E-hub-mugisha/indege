@extends('layouts.admin')
@section('title', 'Categories')
@section('content')

<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#signin-modal" data-toggle="modal" class="d-none d-sm-inline btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Create Category</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        @foreach( $category as $jobs)
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <h4>{{ $jobs->job_type }}</h4></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        

                        
                    </div>
</div>
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button> 
                    <form action="/upload_category" method="POST" enctype="multipart/form-data" class="user">
                    @csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="title" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                @error('title')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="description" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                                @error('description')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                        </div> -->
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="file" name="image" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                            </div>
                            @error('image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
</button>
                    </form>
                </div>
            </div> 
        </div> 
    </div> 
@endsection