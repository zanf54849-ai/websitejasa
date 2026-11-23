<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PembelianCon extends Controller
{
    public function storeinput(Request $request)
    {
        $request->validate([
            'kodeproduk' => 'required|exists:produks,id',
            'banyak' => 'required|numeric|min:1',
            'harga' => 'required|numeric',
        ]);

        $orderCode = "KP-" . date('ymd') . "-" . str_pad(DB::table('pembelians')->count() + 1, 3, '0', STR_PAD_LEFT);

        DB::transaction(function () use ($request, $orderCode) {
            DB::table('pembelians')->insert([
                'kode_pembelian' => $orderCode,
                'produk_id' => $request->kodeproduk,
                'banyak' => $request->banyak,
                'bayar' => $request->harga * $request->banyak,
                'user_id' => Auth::id(),
                'status' => 'Verifikasi',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        return redirect('/admin/pembelians');
    }
}
