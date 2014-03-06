<html>
<head>
	<title>Test</title>
	{{ HTML::style('packages/bootstrap/css/bootstrap.css') }}
</head>
<body>
	<div class="container">
	<div class="row">
		@yield('content')
	</div>
	</div>
</body>
</html>