@extends('_layouts.master')

@section('content')
	<div class="container pt-5 pb-5">
		<h2 class="text-left font-weight-bold heading-2">Posts tagged of tag '{{ ucwords($page->name()) }}'</h2>
		<hr>
		@forelse (posts_filter($posts, $page) as $post)
			<div> 
				@if ($post->image)
					<div class="img-wrapper">
						<img src="{{ $post->mainUrl }}/images/{{ basename($post->image) }}" style="width: 100%">
						<div class="date-wrapper">
							<span class="post-date">{{ date('M j, Y', $post->date) }}</span> 
						</div>
					</div>
				@endif
				<h3 class="article-title font-weight-bold">
					<a
						href="{{ $post->getUrl() }}"
						title="Read more - {{ $post->title }}"
						class="text-black font-extrabold"
					>{{ ucwords($post->title) }}</a>
				</h3>
				<p>
					<div class="list-inline-item meta">
						<span class="user-img">
							<img src="{{ $post->mainUrl }}/images/{{ basename($post->authorimage) }}">
						</span> {{ $post->author }}
					</div>

					<div class="list-inline-item meta">
						<img class="tag-img" src="{{ $post->mainUrl }}/assets/images/tag.png">
						@if ($post->tags)
							@foreach ($post->tags as $i => $tag)
								<a class="taglist" 
									href="{{ '/tags/' . $tag }}"
									title="View posts in {{ $tag }}"
								>{{ ucwords($tag) }},
								</a>
							@endforeach
						@endif
					</div>
					<div class="list-inline-item meta">
						<img class="tag-img" src="{{ $post->mainUrl }}/assets/images/tag.png">
						@if ($post->tags)
							@foreach ($post->tags as $i => $tag)
								<a class="taglist" 
									href="{{ '/tags/' . $tag }}"
									title="View posts in {{ $tag }}"
								>{{ ucwords($tag) }}
								</a>
							@endforeach
						@endif
					</div>
				</p>
				<p>{!! $post->excerpt(250) !!}</p>
			</div>
		@empty
			<p>No posts to show.</p>
		@endforelse
	</div>
@endsection