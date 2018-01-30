<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body>
	<div class="container-fluid">
		<div id="header">
			<div class="col-md-12">
				<h2><b>ShopNow</b></h2>
			</div>
		</div>
		<div id="content">
			<div class="col-md-2">
				<a href="{{ action('CategoriesController@index') }}" class="btn btn-primary btn-block">Category</a>
				<a href="{{ action('ProductsController@index') }}" class="btn btn-primary btn-block">Product</a>
			</div>
			<div class="col-md-10">
				<div class="panel">
					<div class="panel-body">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>