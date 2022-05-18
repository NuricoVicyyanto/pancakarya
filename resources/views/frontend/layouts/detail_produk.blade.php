@extends('frontend.layouts.layout')
@section('content')
<div class="container">
    <div class="card shadow p-3">
        <div class="row" style="background-color:white; padding:20px;">
            <div class="col-md-8">
                <form action="{{ url($dok->id)}}" method="post" enctype="multipart/form-data">
                    <img src="{{ asset($dok->sampul)}}" class="img-thumbnail" alt="responsive image">
            </div>

            <div class="col-md-4">
                <h3 class="my-3">{{ $dok->namaproduk }}</h3>
                <p>{{ $dok->deskripsi }}</p>
                <h3 class="my-3">Detail Produk</h3>
                <ul>
                    <li>Luas : {{ $dok->berat }} m<sup>2</sup></li>
                    <li>Stok : {{ $dok->stok }}</li>
                </ul>
                <h5 class="card-text text-justify">
                    <b>Harga : Rp {{ $dok->harga }}</b>
                </h5>
                <a href="/transaksis" class="btn btn-success float-right shadow">Pesan</a><br><br>
                <a href="https://wa.me/6281231242823?text=Hai Admin saya {{ auth()->user()->name }}, disini saya ingin menanyakan  produk perumahan yang ditawarkan pada website, apakah produk {{ $dok->namaproduk }} masih tersedia?" class="btn btn-success float-right shadow">Pesan WhatsApp</a>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
@endsection