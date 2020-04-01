@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
                <div class ="row">
                    <div class="col-md-6">
                    {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Document No</th>
                                    <td>:</td>
                                    <td>{{$dt->document_no}}</td>
                               
                                
                                    <th>Document PO</th>
                                    <td>:</td>
                                    <td>{{$dt->purchase_orders->document_no}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>:</td>
                                    @if($dt->status==1)
                                        <td>
                                            <label class="label label-warning">{{$dt->statuss->nama}}</label>
                                        </td>
                                    @else
                                        <td>
                                            <label class="label label-success">{{$dt->statuss->nama}}</label>
                                        </td>
                                    @endif
                               
                                
                                    <th>Created At</th>
                                    <td>:</td>
                                    <td>{{ date('d M Y', strtotime($dt->created_at)) }}</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class ="row">
                    <div class="col-md-12">
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>Produksi</th>
                                    <th>Qty</th>
                                    <th>Buy</th>
                                    <th>Grand Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dt->purchase_orders->line as $ln)
                                <tr>
                                    <td>{{$ln->produks->nama}}</td>
                                    <td>{{$ln->qty}}</td>
                                    <td>{{$ln->buy}}</td>
                                    <td>{{$ln->grand_total}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>
                                        <b><i>Total</i></b>
                                    </th>
                                    <th><b><i>{{$ln->sum_buy()}}</i></b></th>
                                    <th><b><i>{{$ln->sum_grand_total()}}</i></b></th>
                                </tr>
                            </tfoot>
                        </table>
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