@extends('template/main_template')

@section('head')
    <style>
        label {
            font-weight: 500;
        }
    </style>
@endsection

@section('title', 'Sign up')

@section('container')
    <div class="containter mx-auto p-2 mb-4" style="width:500px;">
        <form method="POST" action="/store_user">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="phone" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Enter phone" name="phone">
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select class="form-control" id="role" name="role">
                    <option selected disable>Choose role</option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-light border border-secondary">Submit</button>
        </form>
    </div>
@endsection