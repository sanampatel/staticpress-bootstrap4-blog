<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ $page->title }}</title>
	<meta name="keywords" content="{{ $page->seokeywords ?? $page->seokeywords }}">
	<meta name="description" content="{{ $page->seodescription ?? $page->seodescription }}">
	
	<meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="{{ $page->getUrl() }}"/>
	<meta property="og:keywords" content="{{ $page->sitekeywords }}" />
	<meta property="og:description" content="{{ $page->sitedescription }}" />

	<link rel="home" href="{{ $page->baseUrl }}">
	<link rel="icon" href="/favicon.ico">
	<link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	@yield('meta')

	@include('_partials.cms.identity_widget')

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
	@include('_partials.nav')
		<article>
			<section>
				@yield('content')
			</section>
		</article>
	@include('_partials.footer')
	<script src="{{ mix('js/main.js', 'assets/build') }}"></script>
	@include('_partials.cms.identity_redirect')
</body>
</html>
