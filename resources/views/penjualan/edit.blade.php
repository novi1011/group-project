@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-header" center>FORM EDIT DATA BARANG</div><br>

                <div class="card-body">
                <form action="{{ route('update_FormFactory', $forms->id) }}" method="post">
                {{csrf_field()}}

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Product ID</label>

                            <div class="col-md-6">
                                <input type="increment" name="product-id" value="{{ $forms->product_id }}">
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Product Name</label>

                            <div class="col-md-6">
                                <input type="text" name="product_name" value="{{ $forms->product_name }}">
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Supplier_id</label>

                            <div class="col-md-6">
                                <input type="int" name="supplier_id" value="{{ $forms->supplier_id }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Unit_price</label>

                            <div class="col-md-6">
                                <input type="decimal" name="unit_price" value="{{ $forms->unit_price }}">
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