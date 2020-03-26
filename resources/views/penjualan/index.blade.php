@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Produk </div><br> 
                    <a style="margin-left:20px;" href="{{route ('produk.create')}}" class="btn btn-primary btn-sm">Add New</a>
                    <button  class="btn btn-danger delete_all btn-sm" data-url="{{ url('myproductsDeleteAll') }}">Delete All Selected</button>
                    <a class="btn btn-primary btn-sm" style="margin-left:20px;" href="{{ route('produk.index') }}">Refresh</a>
                    <a class="btn btn-primary btn-sm" style="margin-left:20px;" href="{{ route('home_supplier') }}">Dashboard</a>
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

                        <table class="table table-striped" style="width:100%;">
                            <tr>
                                <th width="50px"><input type="checkbox" id="master"></th>
                                <th>Product Name</th>
                                <th>Supplier ID</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Ceated_at</th>
                                <th>Updated_at</th>
                                <th colspan="4">Actions</th>
                            </tr>
                            @if($produk->count())
                            @foreach($produk as $item)
                                <tr id="tr_{{$item->id}}">
                                    <td><input type="checkbox" class="sub_chk" data-id="{{$item->id}}"></td>
                                    <td>{{$item->Product_name}}</td>
                                    <td>{{$item->Supplier_id}}</td>
                                    <td>{{$item->Unit_price}}</td>
                                    <td>{{$item->Quantity}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td>   
                                         <form method="POST" action="{{ route('produk.destroy',$item->id) }}">
                                             {{csrf_field()}}
                                             {{method_field('DELETE')}}
                                        <a href="{{route ('produk.show', $item->id)}}" style="width:100px;" class="btn btn-warning btn-sm">View</a>
                                        <hr style="margin-top:10px; margin-bottom:0px;">
                                        <a href="{{route ('produk.edit', $item->id)}}" style="width:100px; margin-top:10px;" class="btn btn-primary btn-sm">Edit</a>
                                        <hr style="margin-top:10px; margin-bottom:0px;">
                                        <button style="width:100px; margin-top:10px;" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Di Hapus?');">Delete</button>
                                        </from>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                        </table>
                </div>
            </div>
            {{$produk->links()}}
        </div>
    </div>
</div>
@endsection
<script type="text/javascript">
    $(document).ready(function () {


        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk").prop('checked', true);  
         } else {  
            $(".sub_chk").prop('checked',false);  
         }  
        });


        $('.delete_all').on('click', function(e) {


            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  


            if(allVals.length <=0)  
            {  
                alert("Please select row.");  
            }  else {  


                var check = confirm("Apakah anda yakin akan menghapus pilihan?");  
                if(check == true){  


                    var join_selected_values = allVals.join(","); 


                    $.ajax({
                        url: $(this).data('url'),
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            if (data['success']) {
                                $(".sub_chk:checked").each(function() {  
                                    $(this).parents("tr").remove();
                                });
                                alert(data['success']);
                            } else if (data['error']) {
                                alert(data['error']);
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });


                  $.each(allVals, function( index, value ) {
                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
                }  
            }  
        });


        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.trigger('confirm');
            }
        });


        $(document).on('confirm', function (e) {
            var ele = e.target;
            e.preventDefault();


            $.ajax({
                url: ele.href,
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    if (data['success']) {
                        $("#" + data['tr']).slideUp("slow");
                        alert(data['success']);
                    } else if (data['error']) {
                        alert(data['error']);
                    } else {
                        alert('Whoops Something went wrong!!');
                    }
                },
                error: function (data) {
                    alert(data.responseText);
                }
            });


            return false;
        });
    });
</script>
