@extends('marketlayout')
@section('content')
	@foreach ($products as $product)
			<div class="col-md-3">
				<a href="{{ url('market/products', $product->id) }}">
					<img src="{{ url('uploads', $product->default_image) }}" alt="{{ $product->default_image }}" class="img img-thumbnail">
					<h5 class="text-center">{{ $product->name }}</h5>
				</a>
					<p class="text-center">Price : {{ $product->price }}</p>
					<button class="btn btn-success btn-block">Add To Cart</button>
			</div>
		@endforeach
@endsection