<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Models\Goods_receipt;

class Gr_controller extends Controller
{
    public function index(){
        $title ='Good Receipt';
        $data = Goods_receipt::orderBy('created_at','desc')->get();

        return view('gr.index',compact('title','data'));
    }
}
