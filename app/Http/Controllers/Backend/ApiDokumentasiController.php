<?php

namespace App\Http\Controllers\Backend;
use App\Models\Dokumentasi;

use Illuminate\Http\Request,
    App\Http\Controllers\controller;
use Illuminate\Supports\Facades\Response;

class ApiDokumentasiController extends Controller
{
    public function getAll()
    {
        $dok = Dokumentasi::all();
        return response()->json($dok, 201);
    }

    Public function createdok(Request $request)
    {
        Dokumentasi::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil ditambahkan'
        ],201);
    }

    Public function updatedok($id, Request $request)
    {
        Dokumentasi::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil dirubah'
        ],201);
    }

    Public function deletedok($id)
    {
        Dokumentasi::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil dihapus'
        ],201);
    }
}
