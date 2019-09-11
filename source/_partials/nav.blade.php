<div class="container pt-2 pb-2">
	<nav class="navbar navbar-expand-lg navbar-light p-0 bg-white">
		<a class="navbar-brand p-0" href="{{ $page->mainUrl }}/">
			<img class="logo" src="{{ $post->mainUrl }}/images/{{ basename($settings->setting->sitelogo) }}">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">									
			</ul>
			<div id="vue-search">
				<search></search>
			</div>
		</div>
	</nav>
</div>