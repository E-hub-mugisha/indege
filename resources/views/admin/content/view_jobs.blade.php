@extends('layouts.admin')
@section('title', 'Job list')
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
                                            <th>Job ID</th>
                                            <th>Job Poster</th>
                                            <th>Job Title</th>
                                            <th>phone number</th>
                                            <th>Job Type</th>
                                            <th>description</th>
                                            <th>location</th>
                                            <th>amount</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Job ID</th>
                                            <th>Job Poster</th>
                                            <th>Job Title</th>
                                            <th>phone number</th>
                                            <th>Job Type</th>
                                            <th>description</th>
                                            <th>location</th>
                                            <th>amount</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($job as $jobs)
                                        <tr>
                                            <td>{{ $jobs->id }}</td>
                                            <td>{{ $jobs->job_poster }}</td>
                                            <td>{{ $jobs->job_title }}</td>
                                            <td>{{ $jobs->phone }}</td>
                                            <td>{{ $jobs->job_type }}</td>
                                            <td>{{ $jobs->description }}</td>
                                            <td>{{ $jobs->location }}</td>
                                            <td>{{ $jobs->amount }}</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                @endsection