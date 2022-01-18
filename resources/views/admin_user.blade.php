@extends('template/admin_template')

@section('title', 'User')

@section('head')
@endsection

@section('container')
    <div class="container mx-auto my-4" style="width: 500px;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    @if($user->role === 'User')
                        <tr>
                            <td><a href="/admin/User/{{ $user->id }}">{{ $user->name }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form action="/admin/User/{{ $user->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="badge badge-light px-4 text-primary" style="border: 1px gray solid; padding-top:12px; padding-bottom:12px;">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection