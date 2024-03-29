<?php

return [
	'production' => false,
	'google_analytic_code' => 'UA-23560239-19',
	'disqus_code' => 'static-press',
	'title' => 'Twitter Bootstrap 4 Demo | StaticPress',
	'sitename' => 'StaticPress',
	'mainUrl' => 'https://bootstrap-demo.staticpress.io',
	'baseUrl' => 'https://bootstrap-demo.staticpress.io',
	'siteAuthor' => 'Hence Media Pvt. Ltd.',
	'site' => [
		'title' => 'Twitter Bootstrap 4 Demo | StaticPress',
	],
	'collections' => [
		'posts' => [
			'path' => 'posts/{filename}',
			'sort' => '-date',
			'extends' => '_layouts.post',
			'section' => 'postContent',
			'isPost' => true,
			'comments' => false,
			'isFeatured' => true,
			'tags' => [],
			'categories' => [],
		],
		'tags' => [
			'path' => 'tags/{filename}',
			'extends' => '_layouts.tag',
			'section' => '',
			'name' => function ($page) {
				return $page->getFilename();
			},
		],
		'categories' => [
			'path' => 'categories/{filename}',
			'extends' => '_layouts.category',
			'section' => '',
			'name' => function ($page) {
				return $page->getFilename();
			},
		],
		'settings' => [
			'path' => 'settings/{filename}',
			'extends' => '_layouts.master',
			'section' => '',
			'name' => function ($page) {
				return $page->getFilename();
			},
		],
	],
	'excerpt' => function ($page, $limit = 250, $end = '...') {
		return $page->isPost
			? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
			: null;
	},
    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },
];
