<html>
<head>
	<title>Template Blade Extends</title>
</head>
<body>
	<header>
		<div id="logo"><h1>LOGO</h1></div>
		<div id="logo-description">This is a logo</div>
	</header>

	<section id="content">
		@yield('content')
	</section>
	
	<footer>
		<div class="about-us">About US</div>
	</footer>
</body>
</html>