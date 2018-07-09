<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

	<title>{{ $page->title }} | Love For Linden</title>
	<meta name="description" content=""/>

	<meta name="HandheldFriendly" content="True"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<meta property="og:title" content="{{ $page->title }} | Love For Linden"/>
	<meta property="og:description" content=" "/>  
	<meta property="og:type" content="article"/>
	<meta property="article:published_time" content="{{ date('Y-m-d', $page->published_at) }}"/>
	<meta property="article:author" content="http://jakebennett.net">

	<meta property="og:site_name" content="Love For Linden">
	<meta property="og:locale" content="en_US">
	<meta property="og:url" content="{{ $page->getUrl() }}"/>  
	<meta property="og:image" content="https://www.loveforlinden.com/assets/img/facebookshare.jpg"/>


	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic|Open+Sans:700,400"/>

	<link rel="canonical" href="{{ $page->getUrl() }}"/>
	<meta name="referrer" content="origin-when-cross-origin"/>
	
	<meta property="og:site_name" content="Love For Linden"/>
	<meta property="og:type" content="article"/>
	<meta property="og:title" content="{{ $page->title }}"/>
	<meta property="og:description" content="Two weeks ago yesterday, we packed our vehicle to the gills, loaded two tired kids into their car seats, grabbed a few fizzy drinks for the road, and hit the highway in hot pursuit of home. The asphalt seemed to pass under foot much faster during this trip than the"/>
	<meta property="og:url" content="{{ $page->getUrl() }}"/>
	<meta property="article:published_time" content="{{ date('Y-m-d', $page->published_at) }}"/>
	<meta property="article:modified_time" content="{{ date('Y-m-d', $page->published_at) }}"/>
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:title" content="{{ $page->title }}"/>
	<meta name="twitter:description" content="Two weeks ago yesterday, we packed our vehicle to the gills, loaded two tired kids into their car seats, grabbed a few fizzy drinks for the road, and hit the highway in hot pursuit of home. The asphalt seemed to pass under foot much faster during this trip than the"/>
	<meta name="twitter:url" content="{{ $page->getUrl() }}"/>
	<meta name="twitter:label1" content="Written by"/>
	<meta name="twitter:data1" content="Jacob Bennett"/>
</head>

<body class="post-template">
<main class="content" role="main">

	<article class="post">

		<header class="post-header">
			<a class="blog-logo" href="https://www.loveforlinden.com/">
					<img src="/img/loveforlinden-logo-black.png" alt="Blog Logo"/>
			</a>
		</header>


			<span class="post-meta"><time datetime="{{ date('Y-m-d', $page->published_at) }}">{{ date('d F Y', $page->published_at) }}</time> </span>

			<h1 class="post-title">{{ $page->title }}</h1>

			<section class="post-content">
			  @yield('post-content')
			</section>

			<footer class="post-footer">

				<section class="author">
					<h4>{{ $page->author }}</h4>
					<p></p>
					<ul class="author-meta clearfix">
					</ul>
				</section>

			</footer>


		<div id="disqus_thread"></div>
		<script type="text/javascript">
			var disqus_shortname = 'loveforlinden'; // required: replace example with your forum shortname
			var disqus_identifier = '{{ $page->disqus_id }}';
		 
			/* * * DON'T EDIT BELOW THIS LINE * * */
			(function() {
				var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="//disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

	</article>

</main>

<script type="text/javascript" src="/assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/assets/js/index.js"></script>

</body>
</html>