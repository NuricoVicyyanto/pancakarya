<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Models\User;
use DB;
class LoginController extends Controller
{
    public function postlogin (Request $request){
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('/sadmin');
        }
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function registrasi(){
        return view('backend.auth.registrasi');
    }

    public function simpanregistrasi(Request $request){
        User::create([
            'name' => $request->name,
            'level' => 'user',
            'email' => $request->email,
            'password' =>bcrypt($request->password),
            'remember_token' =>Str::random(60),
        ]);
        return view('backend.auth.login');
    }
}
