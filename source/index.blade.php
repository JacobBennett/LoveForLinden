---
pagination:
  collection: posts
  perPage: 6
---

@extends('_layouts.master')

@section('bodyClass'){{ $pagination->currentPage == 1 ? 'home-template' : 'archive-template'}}@endsection

@section('body')
	<header class="site-head" style="background-image: url(/img/lindenwidewebdark.jpg)">
        <div class="vertical">
            <div class="site-head-content inner">
                <a class="blog-logo" href="https://www.loveforlinden.com/"><img src="/img/loveforlinden-logo-white.png" alt="Love For Linden Logo" class="full-img"></a>
                <h2 class="blog-description">Documenting our family's journey with our precious daughter Linden Grey as we walk through the first years of her life with Biliary Atresia.</h2>
            </div>
        </div>
    </header>
    <main class="content" role="main">
        @foreach($pagination->items as $post)
            <article class="post">
                <header class="post-header">
                    <span class="post-meta"><time datetime="{{ date('Y-m-d', $post->published_at) }}">{{ date('d F Y', $post->published_at) }}</time> </span>
                    <h2 class="post-title"><a href="{{ $post->getUrl() }}">{{ $post->title }}</a></h2>
                </header>
                <section class="post-excerpt">
                    <p>{{ $post->summary }}</p>
                </section>
            </article>
        @endforeach

        <nav class="pagination" role="navigation">
            @if ($previous = $pagination->previous)
                <a class="newer-posts" href="{{ $page->baseUrl }}{{ $previous }}"><span aria-hidden="true">←</span> Newer Posts</a>
            @endif
            <span class="page-number">Page {{ $pagination->currentPage }} of {{ $pagination->totalPages }}</span>
            @if ($next = $pagination->next)
                <a class="older-posts" href="{{ $page->baseUrl }}{{ $next }}">Older Posts <span aria-hidden="true">→</span></a>
            @endif
        </nav>

    </main>
@endsection
