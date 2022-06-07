@extends('layouts.admin')
@section('title', 'create Workers')
@section('content')
<div class="container-fluid">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">@yield('title')</h1>
                    </div>
                    <form action="/upload_worker" method="POST" enctype="multipart/form-data" class="user">
                    @csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="id_number" class="form-control form-control-user" id="exampleFirstName" placeholder="your ID number">
                                @error('id_number')
                                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div><div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="names" class="form-control form-control-user" id="exampleFirstName" placeholder="your Names">
                                @error('names')
                                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="phone" class="form-control form-control-user" id="exampleFirstName" placeholder="phone number">
                                @error('phone')
                                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="email" class="form-control form-control-user" id="exampleFirstName" placeholder="your email">
                                @error('email')
                                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="address" class="form-control form-control-user" id="exampleFirstName" placeholder="address">
                                @error('address')
                                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="experience" class="form-control form-control-user" id="exampleFirstName" placeholder="experience">
                                @error('experience')
                                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div><div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="skills" class="form-control form-control-user" id="exampleFirstName" placeholder="skills">
                                @error('skills')
                                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="payment_mode" class="form-control form-control-user" id="exampleFirstName" placeholder="payment_mode">
                                @error('payment_mode')
                                   <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="description" class="form-control form-control-user" id="exampleLastName" placeholder="description">
                                @error('description')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="file" name="image" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>   
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Worker
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection