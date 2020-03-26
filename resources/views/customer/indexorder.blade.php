@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Order customer</div>

                <div class="panel-body">
                <form method="get" action="">
                {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="pencarian" style="margin-left:20px;">Pencarian</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10">
                            <input type="text" name="cari" class="form-control" style="margin-left:20px;" value="{{ old('cari') }}">
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-info">Cari</button>
                        </div>
                        
                    </div>
                </form>
                    <br>

                        <table class="table table-striped">
                            <tr>
                                
                                <th>Product Name</th>
                                <th>Supplier ID</th>
                                <th>Unit Price</th>
                                <th>Total Amount</th>
                                <th colspan="3">actions</th>
                            </tr>
                            @foreach($customer as $item)
                                <tr>
                                    
                                    <td>{{$item->Product_name}}</td>
                                    <td>{{$item->Supplier_id}}</td>
                                    <td>{{$item->Unit_price}}</td>
                                    <td>{{$item->Total_amount}}</td>
                                    <td>   
                                        <a href="{{ route('customer.index',$item->id) }}" class="btn btn-primary btn-sm">Back</a>
                                      
                                        {{csrf_field()}}
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
