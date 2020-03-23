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
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            
                                    <!-- <td>
                                        
                                        <a href="#" class="btn btn-warning btn-sm">View</a>
                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Di Hapus?');">Delete</button>
                                        
                                    </td> -->
                                </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
