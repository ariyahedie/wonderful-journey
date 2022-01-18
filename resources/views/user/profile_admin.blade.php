@extends('template/admin_template')

@section('title', 'Profile Detail')

@section('head')
    <style>
        label {
            font-weight: 500;
        }
    </style>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection

@section('container')
    <div class="container mb-4">
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 px-3 py-3 border border-secondary rounded">
            <h2 class="mb-3">{{ $users->name }}</h2>
            <p class="mb-1">{{ $users->email }}</p>
            <p class="mb-3">{{ $users->phone }}</p>
            <button class="badge badge-light py-3 px-4 text-primary" style="border: 1px gray solid" onclick="goBack()">Back</button>
        </div>
    </div>
@endsection