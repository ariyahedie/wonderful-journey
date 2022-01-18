@extends('template/user_template')

@section('title', 'Create Arcticle')

@section('head')
    <style>
        label {
            font-weight: 500;
        }
    </style>
@endsection

@section('container')
    <div class="containter mx-auto p-2 mb-4" style="width:500px;">
        <h2>New Blog</h2>
        <form method="POST" action="/store_blog">
            @csrf
            <div class="form-group" style="display:none;">
                <label for="user_id">User_id:</label>
                <select class="form-control" id="user_id" name="user_id">
                    <option value="{{ session('data')['id'] }}"></option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
            </div>
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option value="1">Beach</option>
                    <option value="2">Mountain</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Photo:</label>
                <input type="file" class="form-control-file rounded py-1 px-1" style="border:1px rgb(207, 207, 207) solid;" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="description" class="d-block">Story:</label>
                <textarea name="description" id="description" cols="63" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-light border border-secondary">Create</button>
        </form>
    </div>
@endsection