@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{url('po')}}" class="btn btn-sm btn-flat btn-danger "><i class="fa fa-arrow-left"></i> </a>
                    <a target="_blank" href="{{url('po/pdf/'.$dt->id)}}" class="btn btn-sm btn-flat btn-success "><i class="fa fa-download"></i> Export PDF</a>
                </p>
            </div>
            <div class="box-body">

                <div class="row">
                    <div class="col-md-6">
                        <table class="table">
                            <tbody>
                                <th>Document No</th>
                                <td>:</td>
                                <td>{{$dt->document_no}}</td>

                                <th>Supplier</th>
                                <td>:</td>
                                <td>{{$dt->suppliers->nama}}</td>
                            </tbody>
                        </table>
                    </div>
                
                    <div class="col-md-6">
                        <table class="table">
                            <tbody>
                                <th>Status</th>
                                <td>:</td>
                                @if($dt->status==1)
                                <td>
                                    <label class="label label-warning" >{{$dt->statuss->nama}}</label>
                                </td>
                                @else
                                <td>
                                    <label class="label label-success" >{{$dt->statuss->nama}}</label>
                                </td>
                                @endif

                                <th>Create at</th>
                                <td>:</td>
                                <td>{{date('d M Y',strtotime($dt->created_at))}}</td>
                            </tbody>
                        </table>
                    </div>
                </div>
                    <hr>
                <div class="row">
                    <div class="col-md-12">
                    <form method="post" action="{{url ('po/'.$dt->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <table class="table table-hover myTable">
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Qty</th>
                                    <th>Harga Beli</th>
                                    <th>Grand Total</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Deklarasikan Dulu Untuk Menghitung Total -->
                                <?php
                                    $total_qty=0;
                                    $total_buy=0;
                                    $total=0;
                                ?>

                                @foreach($dt->line as $ln)
                                <!-- Proses Hitung Totalnya -->
                                <?php
                                    $total_qty+=$ln->qty;
                                    $total_buy+=$ln->buy;
                                    $total+=$ln->grand_total;
                                ?>

                                <tr>
                                    <td>{{$ln->produks->nama}}</td>
                                    @if($dt->status !=2)
                                    <td>
                                        <input type="number" name="qty[]" class="form-control" value="{{ $ln->qty}}" >
                                        <input type="hidden" name="id_line[]" value="{{$ln->id}}" >
                                        <input type="hidden" name="produk[]" value="{{$ln->produk}}" >
                                    </td>
                                    @else
                                    <td>{{ $ln->qty }}</td>
                                    @endif

                                    @if($dt->status !=2)
                                    <td>
                                        <input type="number" name="buy[]" class="form-control" value="{{ $ln->buy}}" >
                                    </td>
                                    @else
                                    <td>Rp.{{ number_format($ln->buy,0 )}}</td>
                                    @endif
                                    <td>
                                        Rp. {{number_format($ln->grand_total,0)}}
                                    </td>
                                    <td>
                                        <button href="{{url('po/line/'.$ln->id)}}" class="btn btn-xs btn-danger btn-hapus">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>
                                        <b>Jumlah</b>
                                    </th>
                                    <th>
                                        <b>{{$total_qty}}</b>
                                    </th>
                                    <th>
                                        <b>Rp.{{number_format($total_buy,0)}}</b>
                                    </th>
                                    <th>
                                        <b>Rp.{{number_format($total,0)}}</b>
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                        <div>
                            @if($dt->status !=2)
                            <button type= "submit" class="btn btn-block btn-primary">Tekan disini ( don't enter! )</button>
                            @endif
                        </div>
                        </form>
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
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection