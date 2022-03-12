<?php

namespace App\Http\Controllers\Backend;
use App\Models\Pengguna;

use Illuminate\Http\Request,
    App\Http\Controllers\controller;
use Illuminate\Supports\Facades\Response;

class ApiPenggunaController extends Controller
{
    public function getAll()
    {
        $user = Pengguna::all();
        return response()->json($user, 201);
    }

    Public function createpeng(Request $request)
    {
        Pengguna::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil ditambahkan'
        ],201);
    }

    Public function updatepeng($id, Request $request)
    {
        Pengguna::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil dirubah'
        ],201);
    }

    Public function deletepeng($id)
    {
        Pengguna::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Data berhasil dihapus'
        ],201);
    }
}
