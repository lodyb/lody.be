<!doctype html>
<html>
<head>
	<title>{{$title or 'lody.be'}}</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link href='https://fonts.googleapis.com/css?family=Sura' rel='stylesheet' type='text/css'>
	@stack('styles')
</head>
<body>

<header>
	<figure>
		<a href="/">@include('lodyb-logo')</a>
	</figure>
	<nav>
		<a href="/">posts</a>
		<a href="/cat">categories</a>
		<a href="/media">media</a>
	</nav>
</header>
	@stack('title')
<main>
	@stack('main')
</main>
	@if(isset($index))
		@stack('title')
	@endif
<footer>
	<p>☆</p>
</footer>
@stack('scripts')
</body>
</html>