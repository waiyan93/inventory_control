@extends('adminlayout')
@section('content')
	 {{ Form::model($category, [
	 		'action' =>['CategoriesController@update', $category->id],
	 		'method' =>'PUT'
	 	])
	 }}
 	@include('categories.template')
 	<button class="btn btn-primary">Update</button>
 	
@endsection