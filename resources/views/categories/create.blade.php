@extends('adminlayout')
@section('content')
	{{
		Form::open([

		"action" => "CategoriesController@store",

		"method" => "POST"
		
		])
	}}
		@include('categories.template')
		<button class="btn btn-primary">Create Category</button>
	{{
		Form::close()
	}}
@endsection