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
               <div class="table-responsive">
                    <table class="table table-striped myTable">
                        <thead>
                            <tr>
                                <th>Detail</th>
                                <th>#</th>
                                <th>Document_no</th>
                                <td>Total_Item</td> 
                                <td>Total_Nilai</td>
                                <th>Status</th>
                                <th>Created_at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $e=>$dt)
                                <tr>
                                    <td> <a href="{{ url('gr/' .$dt->id) }}" class="btn btn-xs btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <td>{{$e+1}}</td>
                                    <td>{{$dt->document_no}}</td>
                                    <td>{{$dt->total_item()}}</td>
                                    <td>Rp.{{number_format($dt->purchase_orders->grand_total())}}</td>
                                    @if($dt->status==1)
                                        <td>
                                            <label class="label label-warning">{{$dt->statuss->nama}}</label>
                                        </td>
                                    @else
                                        <td>
                                            <label class="label label-success">{{$dt->statuss->nama}}</label>
                                        </td>
                                    @endif
                                    <td>{{date('d M y',strtotime($dt->created_at))}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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