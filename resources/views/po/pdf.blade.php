<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 
    <!-- <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}"> -->
 
   
   
</head>

<body>

<div class="container">
		<center>
			<h4>Laporan Purchase Order</h4>
			<h5><a target="_blank"></a></h5>
		</center>
		<br/>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>id</th>
					<th>Purchase Order</th>
					<th>Produk</th>
					<th>Qty</th>
					<th>Buy</th>
					<th>Grand Total</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($dt as $p)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$p->purchase_order}}</td>
					<td>{{$p->produk}}</td>
					<td>{{$p->qty}}</td>
					<td>{{$p->buy}}</td>
					<td>{{$p->grand_total}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
 
	</div>
</body>
</html>