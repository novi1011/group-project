@extends('layouts.app')

@section('content')
    <div class="row text-center">
        <div class="container-fluid">
             <div class="row">
                <div class="col-sm-6 col-sm-offset-2">

        <h3>Keterangan Produk</h3><b>
        <br>
        
        <table class="table table-bordered">
  <thead class="thead-light">
    <tr class= "text-center">
      <th scope="col">Product Name</th>
      <th scope="col">Supplier ID</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Quantity</th>
    </tr>
    
  </thead>
  <tbody>
    <tr>
      <td>{{$produk->Product_name}}</td>
      <td>{{$produk->Supplier_id}}</td>
      <td>{{$produk->Unit_price}}</td>
      <td>{{$produk->Quantity}}</td>
      </tr>
  </tbody>
</table>
    <br>
    <a href="{{ route('produk.index') }}" class="btn btn-danger btn-sm" style="width:150px;">Back</a>
        
        </div>
    </div>
       
@endsection
