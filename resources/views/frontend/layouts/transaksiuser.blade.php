@extends('frontend.layouts.layout')
@section('content')

<div class="container">
<div class="card shadow p-3">
    <div class="card-body">
    <h1>Form Pembayaran</h1>
    <hr>
    <form action="{{ route('bayar')}}" method="post" enctype="multipart/form-data">
    <p><b>Nomor Rekening (Bank BRI) : 650001005395505 (Nidha Kusumaningrum )</b></p>
    <p><b> Ovo / Gopay / Shopeepay/ Dana : 081314726617 (Nidha Kusumaningrum )</b></p> <br>
    {{ csrf_field() }}
    <label for="gambar">Upload Bukti Transaksi</label>
      <input name="gambar" required type="file" id="gambar"><br><br>
      <label for="title">Nama :</label><br>
      <input name="nama" required type="text" id="nama" class="form-control" readonly value="{{ auth()->user()->name }}"><br><br>
      <label for="title">Alamat :</label><br>
      <input name="alamat" required type="text" id="alamat" class="form-control" placeholder="Alamat Lengkap"><br><br>
      <label for="title">Email :</label><br>
      <input name="email" required type="email" id="email" class="form-control" readonly value="{{ auth()->user()->email }}"><br><br>
      <label for="title">Produk :</label><br>
      <input name="produk" required type="text" id="produk" class="form-control" placeholder="Produk"><br><br>
      <label for="title">Jumlah :</label><br>
      <input name="jumlah" required type="number" id="jumlah" class="form-control" placeholder="Jumlah"><br><br>
      <input type="submit" class="btn btn-success shadow" value="Kirim">
      <br>
      <p><i>*Jika data yang diisi tidak lengkap kami tidak akan melakukan pengiriman barang</i></p>
    </form>
    </div>
  </div>
</div>
</div>
<br>

@endsection