<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtTransaksi = Transaksi::latest()->get();
        return view('backend.transaksi.transaksi',compact('dtTransaksi'));
    }

    public function datatransaksi()
    {
        $dtTransaksi = Transaksi::latest()->get();
        return view('frontend.layouts.transaksiuser',compact('dtTransaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.transaksi.tambahtransaksi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->gambar;
        $namaFile = "http://127.0.0.1:8000/img/".$nm->getClientOriginalName();

            $dtUpload = new transaksi;
            $dtUpload->nama = $request->nama;
            $dtUpload->alamat = $request->alamat;
            $dtUpload->email = $request->email;
            $dtUpload->produk = $request->produk;
            $dtUpload->jumlah = $request->jumlah;
            $dtUpload->gambar =$namaFile;

            $nm->move(public_path().'/img',$namaFile);
            $dtUpload->save();

            return redirect('transaksi');

    }


    public function bayar(Request $request)
    {
        $nm = $request->gambar;
        $namaFile = "http://127.0.0.1:8000/img/".$nm->getClientOriginalName();

            $dtUpload = new transaksi;
            $dtUpload->nama = $request->nama;
            $dtUpload->alamat = $request->alamat;
            $dtUpload->email = $request->email;
            $dtUpload->produk = $request->produk;
            $dtUpload->jumlah = $request->jumlah;
            $dtUpload->gambar =$namaFile;

            $nm->move(public_path().'/img',$namaFile);
            $dtUpload->save();

            return redirect('transaksis');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtTransaksi = Transaksi::findorfail($id);
        return view('backend.transaksi.edittransaksi', compact('dtTransaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Transaksi::findorfail($id);
        $awal = $ubah->gambar;

        $dt =[
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],
            'email' => $request['email'],
            'produk' => $request['produk'],
            'jumlah' => $request['jumlah'],
            'gambar' => $awal,
        ];

        $request->gambar->move(public_path().'/img', $awal);
        $ubah->update($dt);
        return redirect('transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtTransaksi = Transaksi::findorfail($id);
        $file = public_path('/img/').$dtTransaksi->gambar;

        if (file_exists($file)){
            @unlink($file);
        }

        $dtTransaksi->delete();
        return back();
        // $dok->delete();
        // return redirect('dokumentasi');
    }
}
