<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use DB;

class ProdukController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produk= Produk::where('Product_name', 'like', "%{$request->get('cari')}%")
        ->orWhere('Supplier_id','like',"%{$request->get('cari')}%")
        ->orderBy('id','DESC')
        ->paginate(4);

    return view('penjualan/index',compact('produk'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjualan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $produk= produk::create($request->all());
         
         return redirect()->route('produk.index')->with('pesan','Data Berhasil Ditambah');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk=Produk::find($id);  
        return view('penjualan/show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk=Produk::findOrFail($id);
        return view('penjualan.edit',compact('produk'));
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

        $produk=Produk::findOrFail($id);
        $produk->update($request->all());
        return redirect()->route('produk.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk=Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("produks")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
        return view('penjualan/index',compact('produk'));

    }
}
