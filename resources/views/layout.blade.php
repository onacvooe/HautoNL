<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<header class="mainHeader">
			<div class="mainHeaderBranding">
				<h1 class="mainHeaderTitle">HAUTO</h1>
				<p class="mainHeaderText">Waar uw huis tot leven komt!</p>
			</div>
			<div class="mainHeaderMenu">
				<a href="/">Naar Homepage</a>
			</div>
		</header>
		@yield('content')

	</body>
</html>