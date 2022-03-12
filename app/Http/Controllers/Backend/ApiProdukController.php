<?php

namespace App\Http\Controllers\Backend;
use App\Models\Produk;

use Illuminate\Http\Request,
    App\Http\Controllers\controller;
use Illuminate\Supports\Facades\Response;

class ApiProdukController extends Controller
{
    public function getAll()
    {
        $prod = produk::all();
        return response()->json($prod, 201);
    }

    Public function createprod(Request $request)
    {
        Produk::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil ditambahkan'
        ],201);
    }

    Public function updateprod($id, Request $request)
    {
        Produk::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil dirubah'
        ],201);
    }

    Public function deleteprod($id)
    {
        Produk::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil dihapus'
        ],201);
    }
}
