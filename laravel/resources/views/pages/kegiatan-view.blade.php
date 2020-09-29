@extends('layouts.main')

@section('content')

<div class="greennature-page-title-wrapper header-style-5-title-wrapper">
    <div class="greennature-page-title-overlay"></div>
    <div class="greennature-page-title-container container">
        <h1 class="greennature-page-title">{{ $data->judul }}</h1>
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

                                        <div class="greennature-item greennature-blog-full">
                                            <div class="greennature-ux greennature-blog-full-ux">
                                                <article id="post-862" class="post-862 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row tag-blog tag-link tag-news">
                                                    <div class="greennature-standard-style">
                                                        <div class="greennature-blog-thumbnail">
                                                            <a href="#"> <img src="{{ url($data->foto) }}" alt="" width="750" height="330" /></a>
                                                        </div>

                                                        <div class="greennature-blog-date-wrapper">
                                                            <div class="greennature-blog-day">{{ date('d', strtotime($data->created_at)) }}</div>
                                                            <div class="greennature-blog-month">{{ date('M', strtotime($data->created_at)) }}</div>
                                                        </div>

                                                        <div class="blog-content-wrapper">
                                                            <!-- entry-header -->

                                                            <div class="greennature-blog-content">{!! $data->konten!!}
                                                                <div class="clear"></div>
                                                            </div>
                                                            </div>
                                                            <!-- blog content wrapper -->
                                                            <div class="clear"></div>
                                                        </div>
                                                    </article>
                                                    <!-- #post -->
                                                </div>
                                            </div>
                                            
                                        </div>
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
                                        <form method="get" id="searchform" action="{{ route('kegiatan.search') }}">
                                            <div class="search-text" id="search-text">
                                                <input type="text" name="q" id="s" autocomplete="off" data-default="Pencarian..." />
                                            </div>
                                            <input type="submit" id="searchsubmit" value="" />
                                            <div class="clear"></div>
                                        </form>
                                    </div>
                                </div>
                                <div id="gdlr-recent-portfolio-widget-2" class="widget widget_gdlr-recent-portfolio-widget greennature-item greennature-widget">
                                    <h3 class="greennature-widget-title">Postingan terkini</h3>
                                    <div class="clear"></div>
                                    <div class="greennature-recent-port-widget">
                                        
                                        @foreach($entries as $item)
                                        <div class="recent-post-widget">
                                            <div class="recent-post-widget-thumbnail">
                                                <a href="{{ route('kegiatan-view', $item->id) }}"><img src="{{ url($item->foto) }}" alt="" width="150" height="150" /></a>
                                            </div>
                                            <div class="recent-post-widget-content">
                                                <div class="recent-post-widget-title"><a href="{{ route('kegiatan-view', $item->id) }}">{{ $item->judul }}</a></div>
                                                <div class="recent-post-widget-info">
                                                    <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="{{ route('kegiatan-view', $item->id) }}">{{ date('j M Y', strtotime($item->created_at)) }}</a></div>
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