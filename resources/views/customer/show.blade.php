@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
@section('content')

    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h3>Data</h3>
            </div>
        </div>

        <hr>
        <div class="card-body">
            <form method="POST" action="{{ route('customer.update',$customer['id']) }}">
               {{csrf_field()}}
               {{method_field('PUT')}}
                <div class="row">

                    <div class="col-sm-3" class="perhitungan">
                            <label for="Product_name">Product_name</label>
                            <input id="Product_name" type="text" placeholder="Masukan Product_name" class="form-control{{ $errors->has('Product_name') ? ' is-invalid' : '' }}" name="Product_name" value="{{$customer['Product_name']}}" readonly >
                                @if ($errors->has('Product_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Product_name') }}</strong>
                                        </span>
                                @endif
                    </div>    
                            
                    <div class="col-sm-3">
                            <label for="Supplier_ID">Supplier ID</label>
                            <input id="Supplier_id" type="text" placeholder="Masukan Supplier ID" class="form-control{{ $errors->has('Supplier_id') ? ' is-invalid' : '' }}" name="Supplier_id" value="{{$customer['Supplier_id']}}" readonly >
                            @if ($errors->has('Supplier_ID'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Supplier_id') }}</strong>
                                        </span>
                                @endif
                    </div>

                    <div class="col-sm-3">
                            <label for="Unit_price">Unit_price</label>
                            <input id="Unit_price" type="text" placeholder="Masukan Unit Price" class="form-control{{ $errors->has('Unit_price') ? ' is-invalid' : '' }}" name="Unit_price" value="{{$customer['Unit_price']}}" readonly>
                            @if ($errors->has('Unit_price'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Unit_price') }}</strong>
                                        </span>
                                @endif
                    </div>

                    <div class="col-sm-3">
                            <label for="Quantity">Quantity</label>
                            <input id="Quantity" type="text" placeholder="Masukan Quantity" class="form-control{{ $errors->has('Quantity') ? ' is-invalid' : '' }}" name="Quantity" value="{{$customer['Quantity']}}" readonly>
                            @if ($errors->has('Quantity'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Quantity') }}</strong>
                                        </span>
                                @endif
                    </div>
                
                
                                @if (session('pesan'))
                                    <div class="alert alert-info alert-close">
                                        {{session('pesan')}}
                                    </div>
                                @endif
                                    
                        <hr>
                                    <div class="col-sm-3" style="margin-top:20px;">
                                        <input id="jumbel" class="form-control" onChange = "jumlahkan(); jumlahkan2();"  placeholder="Masukan Jumlah Beli" required autofocus>
                                            <br>
                                         
                                      
                                        <input id="Total_amount" class="form-control" type="text" name="Total_amount" readonly>
                                    
                                    </div>

                                    <script type="text/javascript">
                                                function jumlahkan2(){
                                                    var a1 = document.getElementById('Quantity').value;
                                                    var a2 = document.getElementById('jumbel').value;
                                                    
                                                    var total = a1-a2;
                                                    console.log(total);
                                                    // var hasil= document.getElementById("Total_amount");
                                                    // hasil.innerHTML = total;
                                                    document.getElementById('Quantity').value=total;
                                                    // alert(total);
                                                }
                                     
                                     </script>
                                    <script type="text/javascript">
                                                function jumlahkan(){
                                                    var a1 = document.getElementById('Unit_price').value;
                                                    var a2 = document.getElementById('jumbel').value;
                                                    
                                                    var total = a1*a2;
                                                    console.log(total);
                                                    // var hasil= document.getElementById("Total_amount");
                                                    // hasil.innerHTML = total;
                                                    document.getElementById('Total_amount').value=total;
                                                    // alert(total);
                                                }
                                     
                                     </script>
                    </div> 
                                <hr>
                                    <div class="col-sm-3">
                                        <input name="simpan" type="submit" value="Order"style="width:75%;"  class="btn btn-primary">
                                    </div>
               
                
            </form>
        </div>
    </div>


@endsection