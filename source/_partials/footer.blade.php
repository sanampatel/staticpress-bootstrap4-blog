<p class="text-right pt-5">
    <a href="#" class="bg-light pl-3 pr-3 pt-2 pb-2 text-right">&uparrow;</a>
</p>
<footer class="blog-footer bg-light p-3">
	<div class="container text-center">
  		<small>Made with <span style="color: #e74c3c;">♥</span> with India. Build on <a class="text-dark" href="https://getbootstrap.com/"><i>Bootstrap</i></a> using <a class="text-dark" href="https://staticpress.io"><i>StaticPress</i></a></small>
  	</div>
</footer>

<!-- Bootsrap.js -->
<script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Main.js -->
<script src="{{ $page->mainUrl }}/asset/build/js/main.js"></script>

<!-- Customize footer scripts -->
@yield('footer-scripts')

<!-- Identity redirect -->
@include('_partials.cms.identity_redirect')

<!-- Disqus comment -->
<script>	
	(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://{{ $page->disqus_code }}.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();
</script>

<!-- Google analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ $page->google_analytic_code }}"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', '{{ $page->google_analytic_code }}');
	
	var disqus_config = function () {
	this.page.url = getUrl();  // Replace PAGE_URL with your page's canonical URL variable
	this.page.identifier = getUrl(); // Replace PAGE_IDENTIFIER with your page's unique identifier variable
	};
</script>
</body>
</html>