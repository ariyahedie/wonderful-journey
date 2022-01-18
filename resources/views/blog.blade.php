@extends('template/user_template')

@section('title', 'Blog')

@section('head')
@endsection

@section('container')
    <div class="container mx-auto my-4" style="width: 500px;">
        <a href="{{ url('/user/blog/create_blog') }}" class="badge badge-light px-3 py-3 text-primary" style="border: 1px gray solid; padding-top:12px; padding-bottom:12px; font-size:14px;">Create Blog</a>
    </div>

    <div class="container mx-auto my-4" style="width: 500px;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    @if ($article->user_id === session('data')['id'])
                        <tr>
                            <td><a href="/user/blog/{{ $article->id }}">{{ $article->title }}</a></td>
                            <td>
                                <form action="/user/blog/{{ $article->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-light py-2 px-3 text-primary" style="border: 1px gray solid; padding-top:12px; padding-bottom:12px;">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection