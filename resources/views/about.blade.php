@extends('template/main_template')

@section('title', 'About Us')

@section('head')
    <style>
        .trunc {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
    </style>
@endsection

@section('container')
    <!-- isi -->
    <div class="container mb-4">
        <div class="">
            <p>Wonderful Journey is a platform for people to write or create their own article or blog about travelling around Indonesia.</p>
        </div>
    </div>
@endsection