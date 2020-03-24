@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <div class="card bg-light mb-3" style="max-width: 30rem;">
                <div class="panel-heading"><h2>Form Tambah Data</h2></div><br>
                    <div class="card-body">

  <form method="POST" action="#">
<form>
    <div class="form-group">
        <label for="Product_name">Product Name</label>
        <input type="text" class="form-control" id="Product_name" placeholder="Masukkan harga satuan" name="Product_name">
    </div>
    <div class="form-group">
        <label for="Supplier_id">Supplier ID</label>
        <input type="text" class="form-control" id="Supplier_id" placeholder="Masukkan Id" name="Supplier_id">
    </div>
    <div class="form-group">
        <label for="Unit_price">Unit Price</label>
        <input type="text" class="form-control" id="Unit_price" placeholder="Masukkan harga satuan" name="Unit_price">
    </div>
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="text" class="form-control" id="quantity" placeholder="Masukkan satuan" name="quantity">
    </div>
</form>
    <div class="col-md-10 offset-md-2">
        <button type="submit" class="btn btn-primary">{{__('Save')}} </button>
        <a href="{{route ('produk.index')}}" class="btn btn-success" >Back</a>

    
    </div>
    
  </div>
</div>


@endsection

        </div>
    </div>
</div>

