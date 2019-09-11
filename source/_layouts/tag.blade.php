@extends('_layouts.master')

@section('content')
	<main role="main" class="container">
		<div class="row">
			<div class="col-md-8 blog-main">
				<h2 class="pb-4 mb-4 font-italic border-bottom">
					Posts tagged of tag '{{ ucwords($page->name()) }}'
				</h2>
				@forelse (posts_filter($posts, $page) as $post)
					@include('_components.post-preview')
				@empty
					<p>No posts to show.</p>
				@endforelse
			</div>
			<aside class="col-md-4 blog-sidebar">
				@include('_partials.sidebar')
			</aside>
		</div>
	</main>	
@endsection