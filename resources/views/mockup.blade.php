<!doctype html>
<html>
<head>
	<title>lody</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link href='https://fonts.googleapis.com/css?family=Sura' rel='stylesheet' type='text/css'>
</head>
<body>

<header>
	<figure>
		<a href="/">@include('lodyb-logo')</a>
	</figure>
	<nav>
		<a href="#">posts</a>
		<a href="#">categories</a>
		<a href="#">media</a>
	</nav>
</header>
	<h1>Main Heading for the post goes here</h1>
<main>
	<article>
		<div class="created_by">posted by <a href="/by/{{Auth::user()->name}}">{{Auth::user()->name}}</a> at {{date('U')}}</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</article>
</main>
<footer>
	<p>Talk to me about your idea</p>
</footer>

</body>
</html>