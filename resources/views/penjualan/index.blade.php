@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Produk </div><br>
                    <a style="margin-left:20px;" href="{{route ('produk.create')}}" class="btn btn-primary btn-sm">Add New</a>

                <div class="panel-body">

                        <table class="table table-striped">
                            <tr>
                                <th>Product Name</th>
                                <th>Supplier ID</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Ceated_at</th>
                                <th>Updated_at</th>
                                <th colspan="4">Actions</th>
                            </tr>
                            @foreach($produk as $item)
                                <tr>
                                    
                                    <td>{{$item->Product_name}}</td>
                                    <td>{{$item->Supplier_id}}</td>
                                    <td>{{$item->Unit_price}}</td>
                                    <td>{{$item->Quantity}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td>   
                                        <a href="{{route ('produk.show', $item->id)}}" style="width:100px;" class="btn btn-warning btn-sm">View</a>
                                        <a href="{{route ('produk.edit', $item->id)}}" style="width:100px; margin-top:10px;" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="#" style="width:100px; margin-top:10px;" class="btn btn-danger btn-sm">Delete</a>
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
