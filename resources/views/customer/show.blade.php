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
            {{$customers->Product_name}}
        </div>
        <div class="col-sm-4">
            <hr>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-sm-12">
            <h3><b>Supplier_id</b></h3>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-4">
            <hr>
        </div>
        <div class="col-sm-4">
            {{$customers->Supplier_name}}
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
            {{$customers->Unit_price}}
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
            {{$customers->Quantity}}
        </div>
        <div class="col-sm-4">
            <hr>
        </div>
    </div>

    <hr>
    <div class="col text-center">
        <div class="col-sm-12">
         <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection