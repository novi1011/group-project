@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h3>ADD NEW DATA</h3>
            </div>
        </div>

        <hr>
        <div class="card-body">
            <form method="POST" action="{{ route('produk.store') }}">
               {{csrf_field()}}
                <div class="row">
                    <div class="col-sm-4">
                        <p></p>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="Product_name">Product_name</label>
                            <input id="Product_name" type="text" placeholder="Masukan Product_name" class="form-control{{ $errors->has('Product_name') ? ' is-invalid' : '' }}" name="Product_name" value="{{ old('Product_name') }}" required autofocus>
                                @if ($errors->has('Product_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Product_name') }}</strong>
                                        </span>
                                @endif
                        </div>
                            
                        <div class="form-group">
                            <label for="Supplier_ID">Supplier ID</label>
                            <input id="Supplier_id" type="text" placeholder="Masukan Supplier ID" class="form-control{{ $errors->has('Supplier_id') ? ' is-invalid' : '' }}" name="Supplier_id" value="{{ old('Supplier_ID') }}" required>
                            @if ($errors->has('Supplier_ID'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Supplier_id') }}</strong>
                                        </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="Unit_price">Unit_price</label>
                            <input id="Unit_price" type="text" placeholder="Masukan Unit Price" class="form-control{{ $errors->has('Unit_price') ? ' is-invalid' : '' }}" name="Unit_price" value="{{ old('Unit_price') }}" required>
                            @if ($errors->has('Unit_price'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Unit_price') }}</strong>
                                        </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="Quantity">Quantity</label>
                            <input id="Quantity" type="text" placeholder="Masukan Quantity" class="form-control{{ $errors->has('Quantity') ? ' is-invalid' : '' }}" name="Quantity" value="{{ old('Quantity') }}" required>
                            @if ($errors->has('Quantity'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Quantity') }}</strong>
                                        </span>
                                @endif
                        </div>



                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">
                                            {{ __('ADD') }}
                            </button>
                            <a href="{{ route('produk.index') }}" class="btn btn-danger btn-sm">Back</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p></p>
                    </div>
                </div>
                @if (session('pesan'))
                    <div class="alert alert-info alert-close">
                        {{session('pesan')}}
                    </div>
                @endif
            </form>
        <hr>
    </div>
@endsection