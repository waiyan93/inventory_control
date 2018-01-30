@extends('adminlayout')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<a href="{{ action('CategoriesController@create') }}" class="btn btn-primary pull-right">Create New Category</a>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<tr>
					<th>No</th>
					<th>Category Name</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
				@foreach($categories as $key => $category)
				{{ Form::open([
						'action' => ['CategoriesController@destroy', $category->id ],
						'method' => 'DELETE'
				])}}
				<tr>
						<td>{{ $key+1 }}</td>
						<td><a href="{{ action('CategoriesController@show', $category->id) }}">{{ $category->name }}</a></td>
						<td>{{ $category->description }}</td>
						<td>
							<a href="{{ action('CategoriesController@edit', $category->id) }}" class="btn btn-warning">Edit</a>
							<button class="btn btn-danger">Delete</button>
						</td>
				</tr>
				{{ Form::close() }}
				@endforeach				
			</table>
		</div>
	</div>
@endsection