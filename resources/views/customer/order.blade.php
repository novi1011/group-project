@extends('layouts.app')

@section('content')
    <div class="row text-center">
        <div class="container-fluid">
             <div class="row">
                <div class="col-sm-6 col-sm-offset-2">

        <h3>Keterangan Order</h3><b>
        <br>
        
        <table class="table table-bordered text-center">
            <thead class="thead-light ">
                <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Unite Price</th>
                <th scope="col">Jumlah Beli</th>
                <th scope="col">Total Bayar</th>
                </tr>
                
            </thead>
            <tbody>
                <tr>
                <td>{{$customer->Product_name}}</td>
                <td>{{$customer->Unit_price}}</td>
                <td>{{$customer->Total}}</td>
                <td>{{$customer->Total_amount}}</td>
                </tr>
            </tbody>
            </table>
                <br>
                <a href="{{ route('customer.index') }}" class="btn btn-danger btn-sm" style="width:150px;">Back</a>
                    
        </div>
    </div>
       
@endsection
