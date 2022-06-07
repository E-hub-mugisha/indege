@extends('layouts.admin')
@section('title', 'Workers list')
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
                                            <th>worker ID</th>
                                            <th>worker names</th>
                                            <th>description</th>
                                            <th>image</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>worker ID</th>
                                            <th>worker names</th>
                                            <th>description</th>
                                            <th>image</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($worker as $workers)
                                        <tr>
                                            <td>{{ $workers->id }}</td>
                                            <td>{{ $workers->names }}</td>
                                            <td>{{ $workers->description }}</td>
                                            <td>{{ $workers->image }}</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                @endsection