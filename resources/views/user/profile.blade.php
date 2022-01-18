@extends('template/user_template')

@section('title', 'Profile')

@section('style')
    <style>
        label {
            font-weight: 500;
        }
    </style>
@endsection

@section('container')
    <div class="container mb-4">
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 px-3 py-3 border border-secondary rounded">
            <h2 class="mb-3">{{ session('data')['name'] }}</h2>
            <p class="mb-1">{{ session('data')['email'] }}</p>
            <p class="mb-3">{{ session('data')['phone'] }}</p>
            <a href="/user/profile/{{ session('data')['id'] }}/edit" class="badge badge-light border border-secondary px-3 py-3">Update profile</a>
        </div>
    </div>
@endsection