@extends('layouts.main')

@section('content')

@php

function desc($string) {
    $split = preg_split('/(\.|\!|\?)/', $string, 3, PREG_SPLIT_DELIM_CAPTURE);
    $custom_desc = implode('', array_slice($split, 0, 4));

    return htmlspecialchars($custom_desc);
}

@endphp

<div class="greennature-page-title-wrapper header-style-5-title-wrapper">
    <div class="greennature-page-title-overlay"></div>
    <div class="greennature-page-title-container container">
        <h1 class="greennature-page-title">Editorial</h1>
        <span class="greennature-page-caption">Kumpulan artikel tentang Suku Anak Dalam</span>
    </div>
</div>

<div class="content-wrapper">
    <div class="greennature-content">
        <!-- Above Sidebar Section-->

        <!-- Sidebar With Content Section-->
        <div class="with-sidebar-wrapper">
            <div class="with-sidebar-container container">
                <div class="with-sidebar-left eight columns">
                    <div class="with-sidebar-content twelve columns">
                        <section id="content-section-1">
                            <div class="section-container container">
                                <div class="blog-item-wrapper">
                                    <div class="blog-item-holder">

                                        @foreach($blogs as $blog)
                                        <div class="greennature-item greennature-blog-full">
                                            <div class="greennature-ux greennature-blog-full-ux">
                                                <article id="post-862" class="post-862 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row tag-blog tag-link tag-news">
                                                    <div class="greennature-standard-style">
                                                        <div class="greennature-blog-thumbnail">
                                                            <a href="{{ route('editorial-view', $blog->id) }}"> <img src="{{ url($blog->foto) }}" alt="" width="750" height="330" /></a>
                                                        </div>

                                                        <div class="greennature-blog-date-wrapper">
                                                            <div class="greennature-blog-day">{{ date('d', strtotime($blog->created_at)) }}</div>
                                                            <div class="greennature-blog-month">{{ date('M', strtotime($blog->created_at)) }}</div>
                                                        </div>

                                                        <div class="blog-content-wrapper">
                                                            <header class="post-header">
                                                                <h3 class="greennature-blog-title"><a href="{{ route('editorial-view', $blog->id) }}">{{ $blog->judul }}</a></h3>
                                                                <div class="clear"></div>
                                                            </header>
                                                            <!-- entry-header -->

                                                        </div>
                                                        <!-- blog content wrapper -->
                                                        <div class="clear"></div>
                                                    </div>
                                                </article>
                                                <!-- #post -->
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                        {{-- <div class="greennature-pagination"><span aria-current='page' class='page-numbers current'>1</span>
                                            <a class='page-numbers' href='page/2/index.html'>2</a>
                                            <a class='page-numbers' href='page/3/index.html'>3</a>
                                            <a class="next page-numbers" href="page/2/index.html">Next &rsaquo;</a></div> --}}
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </section>
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="greennature-sidebar greennature-right-sidebar four columns">
                            <div class="greennature-item-start-content sidebar-right-item">
                                <div id="search-3" class="widget widget_search greennature-item greennature-widget">
                                    <div class="gdl-search-form">
                                        <form method="get" id="searchform" action="{{ route('editorial.search') }}">
                                            <div class="search-text" id="search-text">
                                                <input type="text" name="q" id="s" autocomplete="off" data-default="Pencarian..." />
                                            </div>
                                            <input type="submit" id="searchsubmit" value="" />
                                            <div class="clear"></div>
                                        </form>
                                    </div>
                                </div>
                                <div id="gdlr-recent-portfolio-widget-2" class="widget widget_gdlr-recent-portfolio-widget greennature-item greennature-widget">
                                    <h3 class="greennature-widget-title">Postingan terbaru</h3>
                                    <div class="clear"></div>
                                    <div class="greennature-recent-port-widget">

                                        @foreach($blogs as $item)
                                        <div class="recent-post-widget">
                                            <div class="recent-post-widget-thumbnail">
                                                <a href="{{ route('editorial-view', $item->id) }}"><img src="{{ url($item->foto) }}" alt="" width="150" height="150" /></a>
                                            </div>
                                            <div class="recent-post-widget-content">
                                                <div class="recent-post-widget-title"><a href="{{ route('editorial-view', $item->id) }}">{{ $item->judul }}</a></div>
                                                <div class="recent-post-widget-info">
                                                    <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="{{ route('editorial-view', $item->id) }}">{{ date('j M Y', strtotime($item->created_at)) }}</a></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        @endforeach

                                        <div class="clear"></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Below Sidebar Section-->

            </div>
            <!-- greennature-content -->
            <div class="clear"></div>
        </div>
        <!-- content wrapper -->

        @endsection