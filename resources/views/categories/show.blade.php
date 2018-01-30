@extends('adminlayout')
@section('content')
	<h4><b><u>{{ $category->name }}</u></b></h4>
	<p>{{ $category->description }}</p>
	<hr>
	<h4><b>Related Products</b></h4>
@endsection