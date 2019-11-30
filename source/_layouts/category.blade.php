@extends('_layouts.master')

@section('head')
	<title>{{ seo("category", ucwords($page->name()), "", "", "") }} | {{ $page->sitename }}</title>
	<meta name="keywords" content="Tag, {{ seo("category", $page->name(), "", "", "") }}, {{ seo("category", $page->name(), "", "", "") }} category">
	<meta name="description" content="Post under category {{ seo("category", $page->name(), "", "", "") }}.">
@endsection

@section('content')
	<main role="main" class="container">
		<div class="row">
			<div class="col-md-8 blog-main">
				<h2 class="pb-4 mb-4 font-italic border-bottom">
					Posts under category '{{ ucwords($page->name()) }}'
				</h2>
				@forelse (posts_filter_cat($posts, $page) as $post)
					@include('_partials.components.post-preview')
				@empty
					<p>No posts to show.</p>
				@endforelse
			</div>
			<aside class="col-md-4 blog-sidebar d-none d-lg-block">
				@include('_partials.sidebar')
			</aside>
		</div>
	</main>
@endsection