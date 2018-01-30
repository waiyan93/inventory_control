@extends('adminlayout')
@section('content')
{{ Form::model($product,[
	'action'	=> ['ProductsController@update', $product->id],
	'method'	=> 'PUT',
	'enctype'	=> 'multipart/form-data',
	'files'	=> 'TRUE'
	])
}}
@include('products.template')
{{ Form::label('category', 'Category', null) }}
{{ Form::select(
	'category_id[]', 
	$categories,
	$selected_list,  
	['class' => 'form-control', 'multiple']
	) }}
<div class="row">
	<div class="col-md-3">
		{{ Form::label( 'image_one', 'Image One' ) }}
		<br>
		<img src="/uploads/{{ $product->image_one }}" alt="{{ $product->image_one }}" class="img-responsive thumbnail" width="200px" height="150px">
		{{ Form::file('image_one', null, ['class' => 'form-control']) }}
	</div>
	<div class="col-md-3">
		{{ Form::label( 'image_two', 'Image Two' ) }}
		<br>
		<img src="/uploads/{{ $product->image_two }}" alt="{{ $product->image_two }}" class="img-responsive thumbnail" width="200px" height="150px">
		{{ Form::file('image_two', null, ['class' => 'form-control'])}}
	</div>
	<div class="col-md-3">
		{{ Form::label( 'image_three', 'Image Three' ) }}
		<br>
		<img src="/uploads/{{ $product->image_three }}" alt="{{ $product->image_three }}" class="img-responsive thumbnail" width="200px" height="150px">
		{{ Form::file('image_three', null, ['class' => 'form-control'])}}
	</div>
	<div class="col-md-3">
		{{ Form::label( 'default_image', 'Default Image' ) }}
		<br>
		<img src="/uploads/{{ $product->default_image }}" alt="{{ $product->default_image }}" class="img-responsive thumbnail" width="200px" height="150px">
		{{ Form::file('default_image', null, ['class' => 'form-control'])}}
	</div>
</div>
<br>
	<button class="btn btn-warning">Update Product</button>
{{ Form::close() }}
@endsection