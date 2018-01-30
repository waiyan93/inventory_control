<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>E-Commerce</title>
	<link rel="stylesheet" href="{{ url('css/app.css') }}">
	<style>
		.img-thumbnail{
			display: block;
			height: 200px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div id="header">
			<div class="col-md-12">
				<h2><a href="{{ url('market') }}">ShopNow</a></h2>
			</div>
		</div>
		<div id="content">
			<div class="col-md-2">
				<ul class="list-group">
					@foreach ($categories as $id => $name)
					<li class="list-group-item">
						<a href="{{ url('market/categories', $id) }}">{{ $name }}</a>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="col-md-10">
				<div class="panel panel-default">
					<div class="panel-heading text-right">
						<a href="{{ action('CartController@index') }}">
							@if(Cart::isEmpty())
								<h4>Your Cart ( 0 )</h4>
							@else
							<h4>Your Cart ( {{ Cart::getContent()->count() }} )</h4>
							@endif
						</a>
					</div>
					<div class="panel-body">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ url('js/app.js') }}"></script>
</body>
</html>