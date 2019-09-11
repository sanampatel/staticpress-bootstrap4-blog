@extends('_layouts.master')

@section('content')

<section class="section">
    <div class="container">

        <div class="row">

            <!-- Content-->
            <div class="col-lg-8">

                <!-- Post-->
                <article class="post">
                	<div class="post-header mb-4">
                        <h2 class="post-title my-3"><a href="{{ $page->getUrl() }}" title="View post {{ ucwords($page->title) }}" class="text-body">{{ ucwords($page->title) }}</a></h2>
                    </div>

                    <p class="card-text">
                        <small class="text-muted">Published on {{ date('F j, Y', $page->date) }}</small>
                        <span>•</span>
                        <small class="text-muted">Post under  </small>
                        <a class="badge badge-primary d-inline" href="{{ '/categories/' . $page->categories }}" title="View posts in {{ $page->categories }}">{{ ucwords($page->categories) }}
                        </a>                                           
                    </p>

                    @if($page->image)
                        <div class="post-preview">
                            <img src="{{ $page->mainUrl }}/images/{{ basename($page->image) }}" class="img-fluid rounded">
                        </div>
                    @endif

                    <div class="post-content mt-4">
                        <p>@yield('postContent')</p>
                    </div>

                    <div class="mt-3">
                    	Tags:
						@if ($page->tags)
							@foreach ($page->tags as $i => $tag)
								<a class="bg-light p-1 m-1 text-dark" 
									href="{{ '/tags/' . $tag }}"
									title="View posts in {{ $tag }}"
								>{{ ucwords($tag) }}
								</a>
							@endforeach
						@endif
					</div>
                </article>
                <!-- Post end -->

                <!-- Pagination-->
		        <nav class="mt-5 mb-5">
					<div class="float-left list-inline-item">
						@if ($next = $page->getNext())
							<a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
								&LeftArrow; {{ ucwords($next->title) }}
							</a>
						@endif
					</div>
					<div class="float-right list-inline-item">
						@if ($previous = $page->getPrevious())
							<a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
								{{ ucwords($previous->title) }} &RightArrow;
							</a>
						@endif
					</div>
				</nav>
				<!-- Pagination end-->

            </div>
            <!-- Content end -->

            <!-- Sidebar-->
            <div class="col-lg-4">
                @include('_partials.sidebar')
            </div>
            <!-- Sidebar end-->

        </div>

    </div>
</section>

@endsection