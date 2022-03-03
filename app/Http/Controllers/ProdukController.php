<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtProduk = Produk::all();
        return view('backend.produk.DataProduk',compact('dtProduk'));
    }

    public function produk()
    {
        $dtProduk = Produk::latest()->get();
        return view('frontend.layouts.produk',compact('dtProduk'));
    }

    public function detailproduk($id)
    {
        $dok = Produk::findorfail($id);
        return view('frontend.layouts.detail_produk', compact('dok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.produk.tambahproduk');
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

                $dtUpload = new Produk();
                $dtUpload->namaproduk = $request->namaproduk;
                $dtUpload->deskripsi = $request->deskripsi;
                $dtUpload->berat = $request->berat;
                $dtUpload->stok = $request->stok;
                $dtUpload->harga = $request->harga;
                $dtUpload->sampul = $namaFile;

                $nm->move(public_path().'/img',$namaFile);
                $dtUpload->save();

                return redirect('dataproduk')->with('success','Data Pengalaman kerja baru telah berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Produk::findorfail($id);
        return view('backend.produk.editproduk', compact('prod'));

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
        $nm = $request->gambar;
        $namaFile = $nm->getClientOriginalName();

        $updateProduk = Produk::findOrFail($id);
        $updateProduk->namaproduk = $request->namaproduk;
        $updateProduk->deskripsi = $request->deskripsi;
        $updateProduk->berat = $request->berat;
        $updateProduk->stok = $request->stok;
        $updateProduk->harga = $request->harga;
        $updateProduk->sampul = $namaFile;
        $nm->move(public_path().'/img',$namaFile);
        $updateProduk->save();

        return redirect()->route('dataproduk')->with('success', 'Pengalaman Kerja Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Produk::findorfail($id);
        $file = public_path('/img/').$prod->gambar;

        if (file_exists($file)){
            @unlink($file);
        }

        $prod->delete();
        return back();
    }
}
