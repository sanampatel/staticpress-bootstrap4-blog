		<div class="container pt-2 pb-2">
			<nav class="navbar navbar-expand-lg navbar-light p-0 bg-white">
				<a class="navbar-brand p-0" href="{{ $page->mainUrl }}/">
					@if(isset($isPosts))
						<h2 class="brand_logo nav_logo">
							Blog-StaticPress
						</h2>
					@else
						<h1 class="brand_logo nav_logo">
							Blog-StaticPress
						</h1>
					@endif
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" 
				data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
				aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<div id="vue-search">
								<search></search>
							</div>
						</li>
						<li class="nav-item">
					        <a class="nav-link mt-3" href="{{ $page->mainUrl }}/contact/">Contact Us</a>
					    </li>
					</ul>
				</div>
			</nav>
		</div>