<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_produk;
use App\Models\Purchase_order;
use App\Models\M_supplier;
use\App\Models\Goods_receipt;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Beranda Admin';
        $tot_produk = M_produk::count();
        $tot_po = Purchase_order::count();
        $tot_supplier = M_supplier::count();
        $tot_gr = Goods_receipt::count();
        return view('home', compact('title', 'tot_produk', 'tot_po','tot_supplier', 'tot_gr'));
    }
}
