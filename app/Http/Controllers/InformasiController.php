<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Informasi;
class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtInformasi = Informasi::latest()->get();
        return view('backend.informasi.informasi',compact('dtInformasi'));
    }

    public function artikelinformasi()
    {
        $dtInformasi = Informasi::latest()->get();
        return view('frontend.layouts.informasi',compact('dtInformasi'));
    }

    public function artikelhome()
    {
        $dtInformasi = Informasi::latest()->get();
        return view('frontend.layouts.homepage',compact('dtInformasi'));
    }

    public function detailinformasi($id)
    {
        $dok = Informasi::findorfail($id);
        return view('frontend.layouts.detail_informasi', compact('dok'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.informasi.tambahinformasi');
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

            $dtUpload = new informasi;
            $dtUpload->judul = $request->judul;
            $dtUpload->caption = $request->caption;
            $dtUpload->konten = $request->konten;
            $dtUpload->gambar = $namaFile;

            $nm->move(public_path().'/img',$namaFile);
            $dtUpload->save();

            return redirect('informasis');
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
        $inf = Informasi::findorfail($id);
        return view('backend.informasi.editinformasi', compact('inf'));
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
        $ubah = Informasi::findorfail($id);
        $awal = $ubah->gambar;

        $dt =[
            'judul' => $request['judul'],
            'caption' => $request['caption'],
            'konten' => $request['konten'],
            'gambar' => $awal,
        ];

        $request->gambar->move(public_path().'/img', $awal);
        $ubah->update($dt);
        return redirect('informasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inf = Informasi::findorfail($id);
        $file = public_path('/img/').$inf->gambar;

        if (file_exists($file)){
            @unlink($file);
        }

        $inf->delete();
        return back();
    }
}
