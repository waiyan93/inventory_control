@extends('adminlayout')
@section('content')
	{{ Form::open([
		'action' => 'ProductsController@store',
		'method' => 'POST',
		'enctype' => 'multipart/form-data',
		'files' => 'TRUE'
	]) }} 

		@include('products.template')
		<div class="row">
			<div class="col-md-6">
				<div class="form-group{{ $errors->has('image_one') ? 'has-error' : '' }}">
				    <label for="image_one" class="control-label">Image One</label>
				    {{ Form::file('image_one', old('image_one'), ['class' => 'form-control']) }}
				    @if ($errors->has('image_one'))
				        <span class="help-block">
				            <strong>{{ $errors->first('image_one') }}</strong>
				        </span>
				    @endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group{{ $errors->has('image_two') ? ' has-error' : '' }}">
				    <label for="image_two" class="control-label">Image Two</label>
				    {{ Form::file('image_two', old('image_two'), ['class' => 'form-control']) }}
				    @if ($errors->has('image_two'))
				        <span class="help-block">
				            <strong>{{ $errors->first('image_two') }}</strong>
				        </span>
				    @endif
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-md-6">
					<div class="form-group{{ $errors->has('image_three') ? 'has-error' : '' }}">
				    <label for="image_three" class="control-label">Image Three</label>
				    {{ Form::file('image_three', old('image_three'), ['class' => 'form-control']) }}
				    @if ($errors->has('image_three'))
				        <span class="help-block">
				            <strong>{{ $errors->first('image_three') }}</strong>
				        </span>
				    @endif
				</div>
			</div>
				<div class="col-md-6">
					<div class="form-group{{ $errors->has('default_image') ? 'has-error' : '' }}">
				   		<label for="default_image" class="control-label">Default Image</label>
				    	{{ Form::file('default_image', old('default_image'), ['class' => 'form-control']) }}
				    	@if ($errors->has('default_image'))
				        	<span class="help-block">
				            	<strong>{{ $errors->first('default_image') }}</strong>
				        	</span>
				    	@endif
					</div>
				</div>
			</div>
			<div class="form-group{{ $errors->has('category_list') ? ' has-error' : '' }}">
				    <label for="category_list" class="control-label">Category</label>
				    	{{ Form::select(
								'category_list[]', 
								$categories, 
								old('category_list'), 
								['class' => 'form-control', 'multiple' => 'multiple']
						) }}
				    @if ($errors->has('category_list'))
				        <span class="help-block">
				            <strong>{{ $errors->first('category_list') }}</strong>
				        </span>
				    @endif
				</div>
				<br>
				<button class="btn btn-primary">Create Product</button>

	{{ Form::close() }}
@endsection