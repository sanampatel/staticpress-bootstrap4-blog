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

	<!-- Bootstrap core CSS -->
	<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" 
	rel="stylesheet" 
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
	crossorigin="anonymous">

	{{-- Font awesome --}}
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/fontawesome.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fuse.js/3.4.5/fuse.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>

	<style>
		.brand_logo {
			width: 210px; 
			background: url(/images/{{ basename($settings->setting->sitelogo) }}) no-repeat; 
			background-size: 210px;
			text-indent: -9999px;
			margin: 10px 0 0 0;
			vertical-align: middle;
			height: 60px;
			margin-left: 0px;
		}
		.brand_logo {
			width: 210px; 
			background: url('/images/{{ basename($settings->setting->sitelogo) }}') no-repeat; 
			background-size: 210px;
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

	@include('_custom.header')

	{{-- Custom CSS --}}
	<link rel="stylesheet" href="{{ $page->mainUrl }}/asset/build/css/main.css">
</head>
<body>
	<header class="blog-header mb-5 border-bottom shadow-sm">
		@include('_partials.nav')
	</header>