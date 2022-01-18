<?php

namespace App\Http\Controllers;

use App\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('authentication.login');
    }

    public function login(Request $request){

        $data = \App\User::where('email', $request->email)->where('role', $request->role)->where('password', $request->password)->first();

        if($data){
            
            session(['berhasil_login' => true]);

            if($request->role == 'Admin'){
                $request->session()->put('data', $data);
                return redirect('/admin/home');
            }
            else{  
                $request->session()->put('data', $data);
                return redirect('/user/home');
            }
        }
        else{
            // session(['berhasil_login' => false]);
            return redirect('/login');
        }
        // if(Auth::attempt(['role' => $request->role, 'email' => $request->email, 'password' => $request->password])){
        //     return redirect('/user_greeting');    
        // }
        // else return redirect('/login');
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Authentication  $authentication
     * @return \Illuminate\Http\Response
     */
    public function show(Authentication $authentication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Authentication  $authentication
     * @return \Illuminate\Http\Response
     */
    public function edit(Authentication $authentication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Authentication  $authentication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Authentication $authentication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Authentication  $authentication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Authentication $authentication)
    {
        //
    }
}
