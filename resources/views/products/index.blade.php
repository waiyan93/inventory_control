@extends('adminlayout')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<a href="{{ action('ProductsController@create') }}" class="btn btn-primary pull-right">Create New Product</a>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<tr>
					<th>No</th>
					<th>Product Name</th>
					<th>Category</th>
					<th>Quantity</th>
					<th>Price (Kyats)</th>
					<th>Action</th>
				</tr>
				@foreach($products as $key => $product)
				{{ Form::open([
						'action' => ['ProductsController@destroy', $product->id ],
						'method' => 'DELETE'
				])}}
				<tr>
						<td>{{ $key+1 }}</td>
						<td><a href="{{ action('ProductsController@show', $product->id) }}">{{ $product->name }}</a></td>
						<td>
							@foreach($product->categories as $category)
								{{ $category->name }}
							@endforeach
						</td>
						<td>{{ $product->quantity }}</td>
						<td>{{ $product->price }}</td>
						<td>
							<a href="{{ action('ProductsController@edit', $product->id) }}" class="btn btn-warning">Edit</a>
							<button class="btn btn-danger">Delete</button>
						</td>
				</tr>
				{{ Form::close() }}
				@endforeach				
			</table>
		</div>
	</div>
@endsection