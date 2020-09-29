@extends('layouts.main')

@section('content')

<div class="greennature-page-title-wrapper header-style-5-title-wrapper">
    <div class="greennature-page-title-overlay"></div>
    <div class="greennature-page-title-container container">
        <h1 class="greennature-page-title">Galeri</h1>
    </div>
</div>
<!-- is search -->
<div class="content-wrapper">
    <div class="greennature-content">

        <!-- Above Sidebar Section-->

        <!-- Sidebar With Content Section-->
        <div class="with-sidebar-wrapper">
            <section id="content-section-1">
                <div class="section-container container">
                    <div class="greennature-gallery-item greennature-item" style="margin-bottom: 40px;">
                        @foreach($fotos as $foto)
                        <div class="gallery-column three columns">
                            <div class="gallery-item" style="height: 170px; overflow: hidden;">
                                <a title="{{ $foto->judul }}" href="{{ url($foto->foto) }}" data-fancybox-group="greennature-gal-1" data-rel="fancybox">
                                    <img src="{{ url($foto->foto) }}" alt="" width="400" height="300" />
                                </a>
                            </div>
                            {{-- <span style="margin-bottom: 20px" class="gallery-caption">{{ $foto->judul }}</span> --}}
                        </div>
                        @endforeach
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
        </div>
        <!-- Below Sidebar Section-->

    </div>
    <!-- greennature-content -->
    <div class="clear"></div>
</div>
<!-- content wrapper -->

@endsection