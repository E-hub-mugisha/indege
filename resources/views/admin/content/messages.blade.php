@extends('layouts.admin')
@section('title', 'messages')
@section('content')

<div class="container-fluid">
<div class="card">
            <h6 class="card-header bg-primary text-center">
                Message Center
            </h6>
            @foreach(\App\Models\Contact::all() as $contact)
            <a class="card-body d-flex align-items-center" href="#">
                <div class="card-list-image mr-3">
                    <img class="rounded-circle" src="{{ asset('assets/images/undraw_profile_1.svg') }}"
                        alt="...">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                    <div class="text-truncate">{{ $contact->subject }}</div>
                    <div class="small text-gray-500">{{ $contact->names }} --{{ $contact->created_at }}</div>
                </div>
            </a>
            @endforeach
            <a class="card-footer text-center small text-gray-500" href="/admin/messages">Read More Messages</a>
        </div>
</div>
@endsection