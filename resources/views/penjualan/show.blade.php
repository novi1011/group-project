@extends('layouts.app')

@section('content')

<p>{{$produk->Product_name}}</p>
<p>{{$produk->Supplier_id}}</p>
<p>{{$produk->Unit_price}}</p>
<p>{{$produk->Quantity}}</p>

@endsection