<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produk;
use App\Order;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer=Produk::all();
        return view('customer.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getRow = Order::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();
        
        $lastId = $getRow->first();

        $kode = "00001";
        
        if ($rowCount > 0) {
            if ($lastId->id < 9) {
                    $kode = "0000".''.($lastId->id + 1);
            } else if ($lastId->id < 99) {
                    $kode = "000".''.($lastId->id + 1);
            } else if ($lastId->id < 999) {
                    $kode = "00".''.($lastId->id + 1);
            } else {
                    $kode = "0".''.($lastId->id + 1);
            } 
        }

        $order = Order::where('jumbel', '>', 0)->get();
        $produk = Customer::get();
        return view('penjualan.index', compact('produks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order=Order::create($request->all());
        return redirect()->route('customer.index');

        $transaksi = Produk::create([
            'Product_name' => $request->get('Product_name'),
            'Supplier_id' => $request->get('Supplier_id'),
            'Unit_price' => $request->get('Unit_price'),
            'Quantity' => $request->get('Quantity'),
            
        ]);

        $transaksi->produk->where('id', $transaksi->id)
                    ->update([
                        'jumbel' => ($transaksi->order->jumbel - 1),
                        ]);

    alert()->success('Berhasil.','Data telah ditambahkan!');
    return redirect()->route('penjuala.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer= Produk::find($id);
        // return $produks;
        return view('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Produk::findOrFail($id);
        return view('customer.show',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer=Produk::findOrFail($id);
        $customer->update($request->all());
        $customer->save();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
