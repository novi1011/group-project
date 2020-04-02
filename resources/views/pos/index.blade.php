@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
        <div class="box-header">
            <p>
                <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i>Refresh</button>
            </p>
            </div>
            <div class="box-body">
            
            <input type="hidden" name="grand_total" value="0">
            
            <div class="row">
                <div class="col-md-6">
            
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Scan Barcode</label>
                                <input type="text" autocomplote="off" name="barcode" class="form-control" id="exampleInputEmail1" >
                        </div>
                            </div>
                    
                    </form>


                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                            <th>Kode</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>#</th>
                            </tr>
                        </thead>
                        <tbody class="produk-ajax">
                        
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-stripped">
                                <tbody>
                                <tr> 
                                <th>Jumlah Bayar</th>
                                <td>:</td>
                                <td>
                                    <input type="number" class="form-control" name="jumlah_bayar">
                                </td>
                                </tr>
                                <tr> 
                                <th>Kembalian</th>
                                <td>:</td>
                                <td class="kembalian">
                                    
                                </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <button type ="submit" class="btn btn-lg btn-block btn-primary">Submit</button>

                </div>
            </div>
        
        </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){

        $("input[name = 'barcode']").focus();
        $("input[name='grand_total']").val(0);
        $("input[name='jumlah_bayar']").val('');

    $("input[name='barcode']").keypress(function(e){
        if(e.which  == 13){
        e.preventDefault();
        var kode =$(this).val();
        var url = "{{ url ('produk/ajax') }}"+'/'+kode;
        var _this = $(this);

        $.ajax({
            type: 'get',
            dataType: 'json',
            url:url,
            success:function(data){
                console.log(data);
                _this.val('');

                var nilai = '';

                nilai += '<tr>';

                nilai += '<td>';
                nilai += data.data.kode;
                nilai += '</td>';

                nilai += '<td>';
                nilai += data.data.nama;
                nilai += '</td>';

                nilai += '<td>';
                nilai += data.data.harga;
                nilai += '</td>';

                nilai += '<td>';
                nilai += data.data.stock;
                nilai += '</td>';

                nilai += '<td>';
                nilai += '<button class="btn btn-xs btn-danger hapus"><i class="fa fa-trash"></i></button>';
                nilai += '</td>';

                nilai += '</tr>';

                var total = parseInt ($("input[name='grand_total']").val());
                total += data.data.harga;

                $("input[name='grand_total']").val(total);

                $('.produk-ajax').append(nilai);
                $("input[name='jumlah_bayar']").val(0);
            }
        })


       }
    })
    
    $('body').on('click','.hapus',function(e){
        e.preventDefault();
        $(this).closest('tr').remove();
    })

    $("button[type='submit']").click(function(e){
        e.preventDefault();
        var grand_total = $("input[name='grand_total']").val();
        alert(grand_total);
    })

    $("input[name='jumlah_bayar']").keyup(function(e){
        var grand_total = parseInt($("input[name='grand_total']").val());
        var jumlah_bayar = parseInt($(this).val());
        var kembalian = jumlah_bayar - grand_total ;
        $(".kembalian").text(kembalian);
    })

 // btn refresh
 $('.btn-refresh').click(function(e){
     e.preventDefault();
     $('.preloader').fadeIn();
     location.reload();
 })

})
</script>

@endsection