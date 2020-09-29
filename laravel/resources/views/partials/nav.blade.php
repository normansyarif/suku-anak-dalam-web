<header class="greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">

            <div id="greennature-header-substitute"></div>
            <div class="greennature-header-inner header-inner-header-style-5">
                <div class="greennature-header-container container">
                    <div class="greennature-header-inner-overlay"></div>
                    <!-- logo -->
                    <div class="greennature-logo">
                        <div class="greennature-logo-inner">
                            <a href="index-2.html">
                                <img src="{{ asset('vendors/main_template/images/logo.png') }}" alt="" /> </a>
                        </div>
                        <div class="greennature-responsive-navigation dl-menuwrapper" id="greennature-responsive-navigation">
                            <button class="dl-trigger">Open Menu</button>
                            <ul id="menu-main-menu" class="dl-menu greennature-main-mobile-menu">
                                <li class="menu-item menu-item-home {{ Request::is('/') ? 'current-menu-item' : '' }} page_item page-item-5680 current_page_item"><a href="{{ route('home') }}" aria-current="page">Beranda</a></li>
                                <li class="{{ Request::is('tentant*') ? 'current-menu-item' : '' }} menu-item menu-item-has-children menu-item-15"><a href="#">Tentang Kami</a>
                                    <ul class="dl-submenu">
                                        <li class="menu-item"><a href="{{ route('profil') }}">Profil SAD</a></li>
                                        <li class="menu-item"><a href="{{ route('sejarah') }}">Sejarah SAD</a></li>
                                    </ul>
                                </li>
                                
                                <li class="{{ Request::is('kegiatan*') ? 'current-menu-item' : '' }} menu-item menu-item-home　page_item page-item-5680 current_page_item"><a href="{{ route('kegiatan') }}" aria-current="page">Kegiatan</a></li>
                                <li class="{{ Request::is('editorial*') ? 'current-menu-item' : '' }} menu-item menu-item-home page_item page-item-5680 current_page_item"><a href="{{ route('editorial') }}" aria-current="page">Editorial</a></li>
                                <li class="{{ Request::is('galeri*') ? 'current-menu-item' : '' }} menu-item menu-item-home page_item page-item-5680 current_page_item"><a href="{{ route('galeri') }}" aria-current="page">Galeri</a></li>
                                <li class="{{ Request::is('mitra*') ? 'current-menu-item' : '' }} menu-item menu-item-home page_item page-item-5680 current_page_item"><a href="{{ route('mitra') }}" aria-current="page">Mitra Dagang</a></li>
                                <li class="{{ Request::is('akses*') ? 'current-menu-item' : '' }} menu-item menu-item-home page_item page-item-5680"><a href="{{ route('akses') }}" aria-current="page">Akses ke Lokasi</a></li>

                                @auth
                                <li class="{{ Request::is('admin*') ? 'current-menu-item' : '' }} menu-item menu-item-home page_item page-item-5680"><a href="{{ route('admin.home') }}" aria-current="page">Dashboard</a></li>
                                @endauth

                            </ul>
                        </div>
                    </div>

                    <!-- navigation -->
                    <div class="greennature-navigation-wrapper">
                        <nav class="greennature-navigation" id="greennature-main-navigation">
                            <ul id="menu-main-menu-1" class="sf-menu greennature-main-menu">
                                <li class="menu-item menu-item-home {{ Request::is('/') ? 'current-menu-item' : '' }} greennature-normal-menu"><a href="{{ route('home') }}">Beranda</a></li>
                                <li class="{{ Request::is('tentang*') ? 'current-menu-item' : '' }} menu-item menu-item-has-children greennature-normal-menu"><a href="#" class="sf-with-ul-pre">Tentang Kami</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('profil') }}">Profil SAD</a></li>
                                        <li class="menu-item"><a href="{{ route('sejarah') }}">Sejarah SAD</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('kegiatan*') ? 'current-menu-item' : '' }} menu-item menu-item-home greennature-normal-menu"><a href="{{ route('kegiatan') }}">Kegiatan</a></li>
                                <li class="{{ Request::is('editorial*') ? 'current-menu-item' : '' }} menu-item menu-item-home greennature-normal-menu"><a href="{{ route('editorial') }}">Editorial</a></li>
                                <li class="{{ Request::is('galeri*') ? 'current-menu-item' : '' }} menu-item menu-item-home greennature-normal-menu"><a href="{{ route('galeri') }}">Galeri</a></li>
                                <li class="{{ Request::is('mitra*') ? 'current-menu-item' : '' }} menu-item menu-item-home greennature-normal-menu"><a href="{{ route('mitra') }}">Mitra</a></li>
                                <li class="{{ Request::is('akses*') ? 'current-menu-item' : '' }} menu-item menu-item-home greennature-normal-menu"><a href="{{ route('akses') }}">Akses ke Lokasi</a></li>

                                @auth
                                <li class="{{ Request::is('admin*') ? 'current-menu-item' : '' }} menu-item menu-item-home greennature-normal-menu"><a href="{{ route('admin.home') }}">Admin</a></li>
                                @endauth
                            </ul>

                        </nav>
                        <div class="greennature-navigation-gimmick" id="greennature-navigation-gimmick"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <!-- is search -->