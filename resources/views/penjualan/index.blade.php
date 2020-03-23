@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Produk</div>

                <div class="panel-body">

                        <table class="table table-striped">
                            <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Supplier ID</th>
                                <th>Unit Price</th>
                                <th>Ceated_AT</th>
                                <th>Updated_at</th>
                                <th colspan="3">action</th>
                            </tr>
                            @foreach($produk as $item)
                                <tr>
                                    <td>{{$item->Produk_id}}</td>
                                    <td>{{$item->Product_name}}</td>
                                    <td>{{$item->Supplier_id}}</td>
                                    <td>{{$item->Unit_price}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td>
                                            
                                        <a href="#" class="btn btn-warning btn-sm">View</a>
                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            
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
