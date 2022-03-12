<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        return view('backend.home');
    }

    public function user(){
        return view('backend.user');
    }
}
