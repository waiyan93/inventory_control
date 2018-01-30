@extends('marketlayout')
@section('content')
	{{
		Form::open([
			'action' => ['CartController@addItem', $product->id],
			'method' => 'POST',
		])
	}}
	<h3>Name : {{ $product->name }}</h3>
	<h4>Price : {{ $product->price }}</h4>
	<h4>Category : 
		@foreach ($product->categories as $category)
			<a href="{{ url('market/categories', $category->id ) }}">{{ $category->name }}</a>&nbsp
		@endforeach
	</h4>
	<h4>Description : {{ $product->description }}</h4>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<img src="{{ url('uploads', $product->image_one) }}" alt="{{ $product->image_one }}" class="img img-thumbnail" width="300px" height="225px">
		</div>
		<div class="col-md-4">
			<img src="{{ url('uploads', $product->image_two) }}" alt="{{ $product->image_two }}" class="img img-thumbnail" width="300px" height="225px">
		</div>
		<div class="col-md-4">
			<img src="{{ url('uploads', $product->image_three) }}" alt="{{ $product->image_three }}" class="img img-thumbnail" width="300px" height="225px">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12">
				<div class="form-group">
					<div class="col-md-4 col-md-offset-8">
						<label for="quantity">Quantity</label>
						{{ Form::number('quantity', 1, ['class' => 'form-control']) }}
					</div>
				</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-8">
				<button class="btn btn-success btn-block">Add To Cart</button>
			</div>
		</div>
	</div>
	{{ Form::close() }}
@endsection