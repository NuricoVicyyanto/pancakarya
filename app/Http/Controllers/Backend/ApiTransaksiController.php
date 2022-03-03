<?php

namespace App\Http\Controllers\Backend;
use App\Models\Transaksi;

use Illuminate\Http\Request,
    App\Http\Controllers\controller;
use Illuminate\Supports\Facades\Response;

class ApiTransaksiController extends Controller
{
    public function getAll()
    {
        $transk = Transaksi::all();
        return response()->json($transk, 201);
    }

    Public function createtransk(Request $request)
    {
        Transaksi::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil ditambahkan'
        ],201);
    }

    Public function updatetransk($id, Request $request)
    {
        Transaksi::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil dirubah'
        ],201);
    }

    Public function deletetransk($id)
    {
        Transaksi::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil dihapus'
        ],201);
    }
}
