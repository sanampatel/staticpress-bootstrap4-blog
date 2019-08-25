---
pagination:
    collection: posts
    perPage: 2
---
@extends('_layouts.master')

@section('content')
      <div class="page-wrapper m-5">    

	    <div class="sidebar-page-container">
	    	<div class="container p-0">
	        	<div class="row clearfix">
	                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
	                    <section>                        
	                        <div class="row"> 
	                        @foreach ($pagination->items as $post)
	                        	<div class="col-lg-6 col-md-6 col-sm-6">
	                        		@if ($post->image)
							    		<div class="img-wrapper">
							                <img src="{{ $post->mainUrl }}/images/{{ basename($post->image) }}" style="width: 100%">
							                <div class="date-wrapper">
							                    <span class="post-date">{{ date('M j, Y', $post->date) }}</span> 
							                </div>
							            </div>
							    	@endif
							    	<h4 class="article-title font-weight-bold">
										<a
											href="{{ $post->getUrl() }}"
											title="Read more - {{ $post->title }}"
											class="text-black font-extrabold"
										>{{ ucwords($post->title) }}</a>
									</h4>
									<p>
										<div class="list-inline-item meta" style="display: inline;">
							                <img class="tag-img" src="{{ $post->mainUrl }}/assets/images/tag.png">
							                @if ($post->tags)
							                    @foreach ($post->tags as $i => $tag)
							                        <a class="taglist" 
							                            href="{{ '/tags/' . $tag }}"
							                            title="View posts in tag {{ ucwords($tag) }}"
							                        >{{ ucwords($tag) }},
							                        </a>
							                    @endforeach
							                @endif
							            </div>
							            <div class="list-inline-item meta" style="display: inline;">
							                <img class="tag-img" src="{{ $post->mainUrl }}/assets/images/category.png">
							                @if ($post->categories)
							                    @foreach ($post->categories as $i => $category)
							                        <a class="categorylist" 
							                            href="{{ '/categories/' . $category }}"
							                            title="View posts in category {{ ucwords($category) }}"
							                        >{{ ucwords($category) }}
							                        </a>
							                    @endforeach
							                @endif
							            </div>
									</p>
									<p>{!! $post->excerpt(150) !!}</p>
									<p class="icons">
										<a class="social-icons" href="#"><i class="fab fa-facebook-f fa-1x"></i></a>
										<a class="social-icons ml-2" href="#"><i class="fab fa-twitter fa-1x"></i></a>
										<a class="social-icons ml-2" href="#"><i class="fab fa-instagram fa-1x"></i></a>
									</p>
	                        	</div>
	                        @endforeach                           
	                            
	                        </div>
	                        
	                    </section>
	                    
	                </div><!--End Content Side-->
	                
	                <!--Sidebar-->
	                <div class="sidebar-side pull-left col-lg-3 col-md-4 col-sm-6 col-xs-12">
	                    <aside class="sidebar">                        
	                        <div>
	                            <h3 class="heading-title"><span class="heading-title-span">Categories</span><span class="heading-title-divider"></span></h3>
	                            <ul class="list-group">
									@if ($post->categories)
										@foreach ($categories as $category)
										<li class="list-group-item p-2 m-1 ml-0" style="background: url({{ $post->mainUrl }}/images/bg-img.jpg);">
											<a class="catlists" href="/categories/{{ $category->title }}" title="View posts in {{ $category->title }}">{{ ucwords($category->title) }}</a>
										</li>
										@endforeach
									@endif
								</ul>
	                        </div>

	                        <div class="mt-5">
	                            <h3 class="heading-title"><span class="heading-title-span">Tags</span><span class="heading-title-divider"></span></h3>
	                            <ul class="list-group">
									@if ($post->categories)
										@foreach ($categories as $category)
										<li class="tagstyle p-1">
											<a class="cat-title" href="/tags/{{ $tag->title }}" title="View posts in tag {{ $tag->title }}">{{ ucwords($category->title) }}</a>
										</li>
										@endforeach
									@endif
								</ul>
	                        </div>
	                    </aside>
	                </div><!--End Sidebar Side-->
	            </div>

	            <div style="padding-top: 40px"> 
			@if ($pagination->pages->count() > 1)
				<div>
					@if ($previous = $pagination->previous)
						<a
							href="{{ $previous }}"
							title="Previous Page"
							class="paginator alter-clr"
						>&LeftArrow;</a>
					@endif
					@foreach ($pagination->pages as $pageNumber => $path)
						<a
							href="{{ $path }}"
							title="Go to Page {{ $pageNumber }}"
							class="paginator alter-clr"
						>{{ $pageNumber }}</a>
					@endforeach
					@if ($next = $pagination->next)
						<a
							href="{{ $next }}"
							title="Next Page"
							class="paginator alter-clr"
						>&RightArrow;</a>
					@endif
				</div>
			@endif
        </div>
	        </div>
	    </div>    

</div>
@endsection