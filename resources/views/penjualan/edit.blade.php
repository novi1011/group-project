@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-header" center>FORM EDIT DATA BARANG</div><br>

                <div class="card-body">
                <form action="{{ route('produk.update', $produks->id) }}" method="post">
                {{csrf_field()}}

                        <div class="form-group row">
                            <label for="Product_name" class="col-md-4 col-form-label text-md-right">Product ID</label>

                            <div class="col-md-6">
                                <input type="text" name="Product_name" value="{{ $produks->Product_name }}">
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="Supplier_id" class="col-md-4 col-form-label text-md-right">Supplier ID</label>

                            <div class="col-md-6">
                                <input type="text" name="Supplier_id" value="{{ $produks->Supplier_id}}">
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="Unit_price" class="col-md-4 col-form-label text-md-right">Unit Price</label>

                            <div class="col-md-6">
                                <input type="text" name="Unit_price" value="{{ $Produks->Unit_price }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Quantity" class="col-md-4 col-form-label text-md-right">Quantity</label>

                            <div class="col-md-6">
                                <input type="text" name="Quantity" value="{{ $Produks->Quantity }}">
                            </div>
                        </div>

                        
                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                            
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Edit') }}
                                </button>
                               
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection