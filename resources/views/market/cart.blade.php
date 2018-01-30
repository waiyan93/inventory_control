@extends('marketlayout')
@section('content')
	<table class="table table-default">
		<tr>
			<th>Product Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Amount</th>
			<th>Action</th>
		</tr>
		@foreach($items as $key => $item)
			<tr>
				<td>{{ $item->name }}</td>
				<td>{{ $item->price }}</td>
				<td>{{ $item->quantity }}</td>
				<td>{{ $item->price * $item->quantity}}</td>
				<td>
					<a href="{{ action('CartController@remove', $item->id) }}" class="btn btn-danger">Remove</a>
				</td>
			</tr>
		@endforeach
		<tr>
			<td colspan="3" class="text-center">
				Total Amount
			</td>
			<td>{{ $totalamount }}</td>
			<td>
			</td>
		</tr>
	</table>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4 col-md-offset-4">
					<a href="{{ action('CartController@clear')}}" class="btn btn-success btn-block">Check Out</a>
				</div>
			</div>
		</div>
@endsection