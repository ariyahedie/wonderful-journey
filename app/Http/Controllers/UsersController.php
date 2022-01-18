<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin_user', ['users' => $users]);
    }

    public function index_admin()
    {
        $users = User::all();
        return view('admin_admin', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //tambah fillable di Model

        $request->validate([
            'name' => 'required|max:50',
            'email' => 'email:rfc,dns', 
            'phone' => 'required', 
            'role' => 'required', 
            'password' => 'required'
        ]);

        User::create($request->all());
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        return view('user.profile', ['users' => $users]);
    }

    public function showAdmin(User $users)
    {
        return view('user.profile_admin', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users)
    {
        return view('update_profile', ['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users)
    {
        session('data')['name'] = $request->name;
        session('data')['email'] = $request->email;
        session('data')['phone'] = $request->phone;

        User::where('id', $users->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect('/user/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users)
    {
        if($users->role === 'Admin'){
            User::destroy($users->id);
            return redirect('/admin/Admin');
        }
        else{
            User::destroy($users->id);
            return redirect('/admin/User');
        } 
        
    }
}
