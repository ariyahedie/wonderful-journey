@extends('template/user_template')

@section('title', 'Welcome')

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

    <div class="container mb-4">
        <p class="text-black">Welcome {{ session('data')['name'] }}</p>
    </div> 

    <div class="container mb-4">
        <div class="row">
            @foreach( $articles as $article )
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3">
                    <h2>{{ $article->title }}</h2>
                    <div class="container pl-0" style="min-height: 90px;">
                        <p class="trunc">{{ $article->description }}</p>
                    </div>
                    <a href="/{{ $article->id }}" class="mb-2 d-block">full story</a>
                    <p><i>Category : <a href="/category/{{$categories[$article->category_id-1]->id}}">{{ $categories[$article->category_id-1]->name }}</a></i></p>
                </div>
            @endforeach
        </div>
    </div>
@endsection