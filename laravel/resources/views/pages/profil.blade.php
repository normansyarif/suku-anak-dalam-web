@extends('layouts.main')

@section('title', 'PROFIL SUKU ANAK DALAM')

@section('content')

<div class="content-wrapper">
            <div class="greennature-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    @include('partials.title')
                    <section id="content-section-2">
                        <div class="greennature-color-wrapper  gdlr-show-all no-skin greennature-half-bg-wrapper" style="background-color: #ffffff; ">
                            <div class="container">
                                <div class="twelve columns"></div>
                                <div class="twelve columns">
                                    <div class="greennature-item greennature-about-us-item greennature-normal">
                                        <div class="about-us-title-wrapper">
                                            <h3 class="about-us-title">Profil Suku Anak Dalam</h3>
                                        </div>
                                        <div class="about-us-content-wrapper">
                                            <div class="about-us-content greennature-skin-content">
                                                {!! $profil !!}
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                </div>
                <!-- Below Sidebar Section-->

            </div>
            <!-- greennature-content -->
            <div class="clear"></div>
        </div>
        <!-- content wrapper -->

@endsection