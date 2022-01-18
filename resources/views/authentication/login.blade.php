@extends('template/main_template')

@section('head')
    <style>
        label {
            font-weight: 500;
        }
    </style>
@endsection

@section('title', 'Log in')

@section('container')
    <div class="containter mx-auto p-2 mb-4" style="width:500px;">
        <form method="POST" action="/login_user">
            @csrf
            <div class="form-group">
                <label for="role">Login as:</label>
                <select class="form-control" id="role" name="role">
                    <option selected disable>Choose role</option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-light border border-secondary">Submit</button>
        </form>
    </div>
@endsection