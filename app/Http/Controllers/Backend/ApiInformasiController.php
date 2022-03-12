<?php

namespace App\Http\Controllers\Backend;
use App\Models\Informasi;

use Illuminate\Http\Request,
    App\Http\Controllers\controller;
use Illuminate\Supports\Facades\Response;

class ApiInformasiController extends Controller
{
    public function getAll()
    {
        $dok = Informasi::all();
        return response()->json($dok, 201);
    }

    Public function createinf(Request $request)
    {
        Informasi::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil ditambahkan'
        ],201);
    }

    Public function updatedinf($id, Request $request)
    {
        Informasi::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil dirubah'
        ],201);
    }

    Public function deleteinf($id)
    {
        Informasi::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil dihapus'
        ],201);
    }
}
