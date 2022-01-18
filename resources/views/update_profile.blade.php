@extends('template/user_template')

@section('title', 'Update Profile')

@section('style')
    <style>
        label {
            font-weight: 500;
        }
    </style>
@endsection

@section('container')
    <div class="containter mx-auto p-2 mb-4" style="width:500px;">
        <form method="POST" action="/user/profile/{{ $users->id }}">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" placeholder="Phone number" name="phone">
            </div>
            <button type="submit" class="btn btn-light border border-secondary">Update</button>
        </form>
    </div>
@endsection