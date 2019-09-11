<nav aria-label="..." class="mt-5">
	<ul class="pagination">
		@if ($previous = $pagination->previous)
			<li class="page-item">
				<!-- Previous -->
				<a
					href="{{ $previous }}"
					title="Previous Page"
					class="page-link"
				>Previous</a>
			</li>
		@endif
		@foreach ($pagination->pages as $pageNumber => $path)
			<li class="page-item">
				<a
				href="{{ $path }}"
				title="Go to Page {{ $pageNumber }}"
				class="page-link {{ $pagination->currentPage == $pageNumber ? 'selected' : '' }}"
			>{{ $pageNumber }}</a>
		</li>
		@endforeach
		@if ($next = $pagination->next)
			<li class="page-item"><a
				href="{{ $next }}"
				title="Next Page"
				class="page-link"
			>Next</a></li>
		@endif
	</ul>
</nav>