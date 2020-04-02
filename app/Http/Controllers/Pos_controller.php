<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_produk;

class Pos_controller extends Controller
{
    public function index(){
        $title = 'POS / Penjualan Barang';

        return view('pos.index', compact('title'));
    }

    public function get_produk($kode){
        $dt = M_produk::where('kode', $kode)->first();

        return response()->json([
            'data'=>$dt
        ]);
    }
}

