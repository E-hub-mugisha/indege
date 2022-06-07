@extends('layouts.admin')
@section('title', 'blog list')
@section('content')

<div class="container-fluid">
    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>#</th>
                                            <th>Blog Title</th>
                                            <th>content</th>
                                            <th>image</th>
                                            <th>category</th>
                                            <th>Date created</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Blog Title</th>
                                            <th>content</th>
                                            <th>image</th>
                                            <th>category</th>
                                            <th>Date created</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($blog as $blogs)
                                        <tr>
                                            <td>{{ $blogs->id }}</td>
                                            <td>{{ $blogs->title }}</td>
                                            <td>{{ $blogs->content }}</td>
                                            <td>{{ $blogs->image }}</td>
                                            <td>{{ $blogs->category }}</td>
                                            <td>{{ $blogs->created_at }}</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                @endsection