@extends('template/main_template')

@section('title')
    {{ $categories->name }}
@endsection

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
        <div class="row">
            @foreach($articles as $article)
                @if ($article->category_id === $categories->id)
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 px-3 mb-3">
                        <h2>{{ $article->title }}</h2>
                        <div class="container pl-0" style="min-height: 90px;">
                            <p class="trunc">{{ $article->description }}</p>
                        </div>
                        <a href="/{{ $article->id }}" class="mb-2 d-block">full story</a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection