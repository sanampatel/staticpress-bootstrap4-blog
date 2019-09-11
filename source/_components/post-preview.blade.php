<article class="card border-white mb-3">
    <div class="row no-gutters">
        @if($post->image)
        <div class="col-md-4 align-middle">
            <div class="py-4">
                <img src="{{ $post->mainUrl }}/images/{{ basename($post->image) }}" class="card-img align-middle" alt="...">
            </div>
        </div>
        @endif
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title"><a class="text-dark" href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}">{{ $post->title }}</a></h3>
                <p class="card-text">{!! $post->excerpt(100) !!}</p>
                <p class="card-text">
                    <small class="text-muted">Published on {{ date('F j, Y', $post->date) }}</small>
                    <span>•</span>
                    <small class="text-muted">Post under  </small>
                    <a class="badge badge-primary d-inline" href="{{ '/categories/' . $post->categories }}" title="View posts in {{ $page->categories }}">{{ ucwords($post->categories) }}
                    </a>                                           
                </p>
            </div>
        </div>
    </div>
</article>