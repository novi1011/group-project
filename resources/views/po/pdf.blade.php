<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
   
</head>

<body>

<div class="container">
		<center>
			<h4>LAPORAN PURCHASE ORDER</h4>
			<h5><a target="_blank"></a></h5>
		</center>
		
		<br/>
	<div class ="row">
		<div class ="col-xs-12">
		<table class='table table-bordered' >
		
			<tbody>
				<tr>
					<th>id</th>
					<th>Purchase Order</th>
					<th>Produk</th>
					<th>Qty</th>
					<th>Buy</th>
					<th>Grand Total</th>
				</tr>
				@php $i=1 @endphp
				@foreach($dt as $p)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$p->grand_total}}</td>
					<td>{{$p->purchase_order}}</td>
					<td>{{$p->produk}}</td>
					<td>{{$p->qty}}</td>
					<td>{{$p->buy}}</td>
				
				
				</tr>
			</tbody>
			<tbody>
				
				
				@endforeach
			</tbody>
		</table>
		</div>
	</div>
	
 
	</div>
</body>
</html>