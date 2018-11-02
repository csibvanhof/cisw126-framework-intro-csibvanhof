<!doctype html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
		@yield('content')
	<ul>
		<li><a href="/">Welcome</a></li>
		<li><a href="/profile">Profile</a></li>
	</ul>
		@yield('content2')
    </body>
</html>
