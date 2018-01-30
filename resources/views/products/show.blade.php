@extends('adminlayout')
@section('content')
	<h4><b>Name	: {{ $product->name }}</b></h4>
	<h5>
		Category	: 
		@foreach ($product->categories as $category)
			<a href="{{ action('CategoriesController@show', $category->id ) }}">{{ $category->name }}</a>&nbsp
		@endforeach
	</h5>
	<h5>Price	: {{ $product->price }}</h5>
	<h5>Quantity	: {{ $product->quantity }}</h5>
	<p>Descritpion	: {{ $product->description }}</p>
	<div class="row">
		<div class="col-md-3">
			<img src="/uploads/{{ $product->image_one }}" alt="image_one" class="img-responsive thumbnail" width="200px" height="150px">
		</div>
		<div class="col-md-3">
			<img src="/uploads/{{ $product->image_two }}" alt="image_two" class="img-responsive thumbnail" width="200px" height="150px">
		</div>
		<div class="col-md-3">
			<img src="/uploads/{{ $product->image_three }}" alt="image_three" class="img-responsive thumbnail" width="200px" height="150px">
		</div>
		<div class="col-md-3">
			<img src="/uploads/{{ $product->default_image }}" alt="default_image" class="img-responsive thumbnail" width="200px" height="150px">
		</div>
	</div>
@endsection