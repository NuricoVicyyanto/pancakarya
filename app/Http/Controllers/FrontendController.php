<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.layouts.landingpage');
    }

    public function homepage(){
        return view('frontend.layouts.homepage');
    }

    public function informasi(){
        return view('frontend.layouts.informasi');
    }

    public function dokumentasis(){
        return view('frontend.layouts.dokumentasi');
    }

    public function produk(){
        return view('frontend.layouts.produk');
    }

    public function contact(){
        return view('frontend.layouts.contact');
    }

    public function detail_informasi(){
        return view('frontend.layouts.detail_informasi');
    }
}
