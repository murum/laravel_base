<!doctype html>
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Postboxen.se </title>
	{{ HTML::style('/assets/stylesheets/frontend.css') }}
	{{ HTML::style('/assets/stylesheets/backend.css') }}
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<a class="navbar-brand" href="#">Big Data</a>
		</div><!-- /.container-fluid -->
	</nav>

	<section class="data">
		<header>
			<h1>Data field</h1>
		</header>
		<div class="container">
			@yield('data')
		</div>
	</section>

	@if(isset($message))
	<section class="message">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="alert alert-info">
						<h2>{{ $message }}</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif

	<section class="wrapper">
		<header>
			<h1>Wrapper field</h1>
		</header>
		<div class="container">
			@yield('content')
		</div>
	</section>
	
	<footer class="footer">
		<header>
			<h1>Footer Field</h1>
		</header>
		<div class="container">
		</div>
	</footer>

	{{ HTML::script('/assets/javascript/frontend.js') }}
	{{ HTML::script('/assets/javascript/backend.js') }}
</body>
</html>
