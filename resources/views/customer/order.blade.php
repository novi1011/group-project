@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <div class="card bg-light mb-3" style="max-width: 30rem;">
                <div class="panel-heading"><h2>Form INPUT ORDER ITEM</h2></div><br>
                    <div class="card-body">

  <form method="POST" action="#">
<form>
    <div class="form-group">
        <label for="Product_name">Produc Name</label>
        <input type="text" name="product_name" value="{{ $forms->product_name }}">
    </div>
    <div class="form-group">
        <label for="Supplier_id">Unit price</label>
        <input type="decimal" name="unit_price" value="{{ $forms->unit_price }}">
    </div>
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="integer" class="form-control" id="quantity" placeholder="Masukkan satuan" name="quantity">
    </div>
    <div class="form-group">
        <label for="quantity">Total Amount</label>
        <input type="decimal" class="form-control" id="quantity" placeholder="Masukkan satuan" name="quantity">
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

