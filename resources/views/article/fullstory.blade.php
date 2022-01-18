@extends('template/main_template')

@section('title', 'Full Story')

@section('head')
    <style>
        img{
            width:100%;
            max-width:500px;
        }
    </style>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection

@section('container')
    <!-- isi -->
    <div class="container mb-4">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 px-3">
            <h2 class="mb-3">{{ $articles->title }}</h2>
            <img src="{{ $articles->image }}" alt="image" class="rounded mb-3">
            <p>{{ $articles->description }}</p>
            <button class="badge badge-light py-3 px-4 text-primary" style="border: 1px gray solid" onclick="goBack()">Back</button>
        </div>
    </div>
@endsection