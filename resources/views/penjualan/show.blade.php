@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row text-center">
        <div class="col-sm-12">
            <h3>Keterangan Produk</h3>
        </div>
    </div>

    <hr>
   

    <div class="row text-center">
        <div class="col-sm-12">
            <h3><b>Product Name</b></h3>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-4">
            <hr>
        </div>
        <div class="col-sm-4">
            {{$produk->Product_name}}
        </div>
        <div class="col-sm-4">
            <hr>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-sm-12">
            <h3><b>Supplier Id</b></h3>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-4">
            <hr>
        </div>
        <div class="col-sm-4">
            {{$produk->Supplier_name}}
        </div>
        <div class="col-sm-4">
            <hr>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-sm-12">
            <h3><b>Unit Price</b></h3>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-4">
            <hr>
        </div>
        <div class="col-sm-4">
            {{$produk->Unit_price}}
        </div>
        <div class="col-sm-4">
            <hr>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-sm-12">
            <h3><b>Quantity</b></h3>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-4">
            <hr>
        </div>
        <div class="col-sm-4">
            {{$produk->Quantity}}
        </div>
        <div class="col-sm-4">
            <hr>
        </div>
    </div>

    <hr>
    <div class="col text-center">
        <div class="col-sm-12">
         <a class="btn btn-primary" href="{{ route('produk.index') }}"> Back</a>
        </div>
    </div>
</div>





<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Produk Name</h5>
    <p class="card-text">{{$produk->Product_name}}</p>
  </div>
</div>

<!-- <p>{{$produk->Product_name}}</p>
<p>{{$produk->Supplier_id}}</p>
<p>{{$produk->Unit_price}}</p>
<p>{{$produk->Quantity}}</p> -->

@endsection