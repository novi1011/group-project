<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Models\Goods_receipt;
use App\Models\Purchase_order;
use App\Models\Purchase_order_line;

class Gr_controller extends Controller
{
    public function index(){
        $title ='Good Receipt';
        $data = Goods_receipt::orderBy('created_at','desc')->get();

        return view('gr.index',compact('title','data'));
    }
    public function detail($id){
        $dt = Goods_receipt::find($id);
        $title = "Detail GR  $dt->document_no";

        return view('gr.detail',compact('title','dt'));
    }
}
