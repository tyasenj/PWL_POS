<?php

namespace App\Http\Controllers\Api;

use App\Models\TransaksiModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class TransaksiController extends Controller
{
    public function index()
    {
        return TransaksiModel::all();
    }

    public function store(Request $request)
    {
        $transaksi = TransaksiModel::create($request->all());
        return response()->json($transaksi, 201);
    }

    public function show(TransaksiModel $transaksi)
    {
        $transaksiWithImage = TransaksiModel::with('barang')->find($transaksi->detail_id);
        return response()->json($transaksiWithImage);
    }

    public function update(Request $request, TransaksiModel $transaksi)
    {
        $transaksi->update($request->all());
        return TransaksiModel::find($transaksi);
    }

    public function destroy(TransaksiModel $transaksi)
    {
        $transaksi->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data terhapus',
        ]);
    }

    // public function __invoke(Request $request)
    // {

    //     $validator = Validator::make($request->all(), [
    //         //'penjualan_id',
    //         'penjualan_id' => 'required',
    //         'barang_id' => 'required',
    //         'harga' => 'required',
    //         'jumlah' => 'required',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    //     ]);

    //     //if validation fails
    //     if ($validator->fails()) {
    //         return response()->json($validator->errors(), 422);
    //     }

    //     //create user
    //     $transaksi = TransaksiModel::create([
    //         'penjualan_id' => $request->penjualan_id,
    //         'brang_id' => $request->barang_id,
    //         'harga' => $request->username,
    //         'jumlah' => $request->jumlah,
    //         'image' => $request->image->hashName(),
    //     ]);

    //     //return response JSON user is created
    //     if ($transaksi) {
    //         return response()->json([
    //             'success' => true,
    //             'user' => $transaksi,
    //         ], 201);
    //     }

    //     //return JSON process insert failed
    //     return response()->json([
    //         'success' => false,
    //     ], 409);
    // }
}
