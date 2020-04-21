<?php

namespace App\Exports;
use App\Purchase_order_line;
// use Illuminate\Constract\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class supplier implements FromView
{
    public function view()
    {
        return purchase_order_line::all();
        
    }
}