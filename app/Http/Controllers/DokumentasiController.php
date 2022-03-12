<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Dokumentasi;

class DokumentasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtDokumentasi = Dokumentasi::latest()->get();
        return view('backend.dokumentasi.dokumentasi',compact('dtDokumentasi'));
    }

    public function artikeldokumentasi()
    {
        $dtDokumentasi = Dokumentasi::latest()->get();
        return view('frontend.layouts.dokumentasi',compact('dtDokumentasi'));
    }

    public function detaildokumentasi($id)
    {
        $dok = Dokumentasi::findorfail($id);
        return view('frontend.layouts.detail_dokumentasi', compact('dok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.dokumentasi.tambahdokumentasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //jaga-jaga
        // $nm = $request->gambar;
        // $destinationPath= public_path("/img");
        // $namaFile = $destinationPath .$nm->getClientOriginalName();
        $nm = $request->gambar;
        $namaFile = "http://127.0.0.1:8000/img/".$nm->getClientOriginalName();

            $dtUpload = new dokumentasi;
            $dtUpload->judul = $request->judul;
            $dtUpload->caption = $request->caption;
            $dtUpload->konten = $request->konten;
            $dtUpload->gambar =$namaFile;

            $nm->move(public_path().'/img',$namaFile);
            $dtUpload->save();

            return redirect('dokumentasi');

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
        $dok = Dokumentasi::findorfail($id);
        return view('backend.dokumentasi.editdokumentasi', compact('dok'));
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
        $ubah = Dokumentasi::findorfail($id);
        $awal = $ubah->gambar;

        $dt =[
            'judul' => $request['judul'],
            'caption' => $request['caption'],
            'konten' => $request['konten'],
            'gambar' => $awal,
        ];

        $request->gambar->move(public_path().'/img', $awal);
        $ubah->update($dt);
        return redirect('dokumentasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dok = Dokumentasi::findorfail($id);
        $file = public_path('/img/').$dok->gambar;

        if (file_exists($file)){
            @unlink($file);
        }

        $dok->delete();
        return back();
        // $dok->delete();
        // return redirect('dokumentasi');
    }
}
