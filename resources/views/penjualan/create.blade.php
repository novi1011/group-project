@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <div class="card bg-light mb-3" style="max-width: 30rem;">
                <div class="panel-heading"><h2>Form INPUT ORDER ITEM</h2></div><br>
                    <div class="card-body">

  <form action="{{route ('produk.store')}}" method="POST">

    <div class="form-group">
<<<<<<< HEAD
        <label for="Product_name">Produc Name</label>
        <input type="text" name="product_name" value="{{ $forms->product_name }}">
=======
        <label for="Product_name">Product Name</label>
        <input type="text" class="form-control" id="Product_name" placeholder="Masukkan nama produk" name="Product_name" >
>>>>>>> 8305952ca1ca16bffd04abae89002b736bbfefec
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

        <label for="Quantity">Quantity</label>
        <input type="text" class="form-control" id="Quantity" placeholder="Masukkan satuan" name="Quantity">
    </div>

   

    <div class="col-md-10 offset-md-2">
        <button type="submit" class="btn btn-primary">{{__('Save')}} </button>
        <a href="{{route ('produk.index')}}" class="btn btn-success" >Back</a>
    {{csrf_field()}}
    </form>
    </div>
    
  </div>
</div>
@endsection

        </div>
    </div>
</div>

