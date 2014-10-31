<!DOCTYPE html>
<html>
<head>

		<title>@yield('title', 'The Developers Best Friend')</title>

		<meta charset='utf-8'>

		<link rel='stylesheet' href='/css/dbf.css' type='text/css'>

		@yield('head')
</head>
<body>

<div id="navigation">

	<h1>The Developer's Best Friend</h1>

	<ul>
		<li><a href='/'>Home</a> |</li>
		<li><a href='/loremipsum'>Random Text Generator</a> |</li>
		<li><a href='/usergenerator'>Random User Generator</a></li>
	</ul>	

</div>
	@yield('content')

	@yield('body')

</body>
</html>			