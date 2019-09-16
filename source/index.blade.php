---
pagination:
    collection: posts
    perPage: 4 {{-- Per page pages need to display --}}
---
@extends('_layouts.master')

@section('content') 
	<section class="section">

		{{-- Container --}}
		<div class="container">

			<div class="row">
				 {{-- Content --}}
				<div class="col-lg-8">

					 {{-- Post --}}
					@foreach ($pagination->items as $post)
						@include('_components.post-preview') 
					@endforeach
					 {{-- Post end --}}
				
					 {{-- Pagination --}}
					<div class="row">
						<div class="col-sm-12">
							@if ($pagination->pages->count() > 1)
								@include('_components.pagination')
							@endif
						</div>
					</div>
					 {{-- Pagination end --}}

				</div>
				 {{-- Content end --}}

				{{-- Sidebar --}}
				<div class="col-lg-4">	
					@include('_partials.sidebar')
				</div>
				 {{-- Sidebar end --}}
			</div>

		{{-- </div> end container --}}
	</section>
@endsection