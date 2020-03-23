@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Produk</div>

                <div class="panel-body">
<<<<<<< HEAD
                        <table class="table table-striped">
                            <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Supplier ID</th>
                                <th>Unit Price</th>
                                <th>Ceated_AT</th>
                                <th>Updated_at</th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
=======
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th width="50px"><input type="checkbox" id="master"></th>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Supplier ID</th>
                                    <th>Unit Price</th>
                                    <th colspan="4">Actions</th>
                                </tr>
                            </thead>
                            @if($produks->count())
                            @foreach($produks as $item) 
                                <tr id="tr_{{$item->id}}">
                                    <td><input type="checkbox" class="sub_chk" data-id="{{$item->id}}"></td>
                                    <td>{{$item->Produk_id}}</td>
                                    <td>{{$item->Product_name}}</td>
                                    <td>{{$item->Supplier_id}}</td>
                                    <td>{{$item->Unit_price}}</td>
                                    <td>
                                        <form method="POST" action="{{ route('forms.destroy',$item->id) }}">
                                             {{csrf_field()}}
                                             {{method_field('DELETE')}}
                                        <a href="{{ route('forms.show',$item->id) }}" class="btn btn-warning btn-sm">View</a>
                                        <a href="{{route('forms.edit',$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Di Hapus?');">Delete</button>
                                        </form>
                                    </td>
                                        
                                        
                                </tr>
                            @endforeach
                            @endif
>>>>>>> 1f93bf2aa93bcfae19923c880381ddb081b50bd1
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
