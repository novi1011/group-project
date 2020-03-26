@extends('layouts.app')

@section('content')
    <div class="row text-center">
        <div class="col-sm-12">
            <hr>
                <h3>Keterangan Produk</h3>
            <hr>
            <p>{{$produk->Product_name}}</p>
            <p>{{$produk->Supplier_id}}</p>
            <p>{{$produk->Unit_price}}</p>
            <p>{{$produk->Quantity}}</p>
            <hr>
            <a href="{{ route('produk.index') }}" class="btn btn-danger btn-sm" style="width:150px;">Back</a>
        </div>
    </div>

@endsection