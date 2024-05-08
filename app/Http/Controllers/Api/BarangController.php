<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\BarangModel;

class BarangController extends Controller
{
    public function __invoke(Request $request) {
        // set validation
        $validator = Validator::make($request->all(), [
            'barang_kode' => 'required',
            'kategori_id' => 'required',
            'barang_nama' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // if validations fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // create barang
        $barang = BarangModel::create([
            'barang_kode' => $request->barang_kode,
            'kategori_id' => $request->kategori_id,
            'barang_nama' => $request->barang_nama,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'image' => $request->image->hashName(),
        ]);

        // return response JSON user is created
        if ($barang) {
            return response()->json([
                'success' => true,
                'barang' => $barang,
            ], 201);
        }

        // return JSON process insert failed 
        return response()->json([
            'success' => false,
        ], 409);
    }

    public function show($id)
    {
        $barang = BarangModel::find($id);

        if ($barang) {
            return response()->json([
                'success' => true,
                'barang' => $barang,
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'Barang not found.',
        ], 404);
    }
}