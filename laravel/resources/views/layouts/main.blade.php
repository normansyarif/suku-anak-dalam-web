<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->


<!--  12:30 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />

    <title>Suku Anak Dalam - Desa Nyogan</title>


    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel='stylesheet' href='{{ asset('vendors/main_template/css/style.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('vendors/main_template/plugins/superfish/css/superfish.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('vendors/main_template/plugins/dl-menu/component.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('vendors/main_template/plugins/font-awesome-new/css/font-awesome.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('vendors/main_template/plugins/elegant-font/style.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('vendors/main_template/plugins/fancybox/jquery.fancybox.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('vendors/main_template/plugins/flexslider/flexslider.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('vendors/main_template/css/style-responsive.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('vendors/main_template/css/style-custom.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('vendors/main_template/plugins/masterslider/public/assets/css/masterslider.main.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('vendors/main_template/css/master-custom.css') }}' type='text/css' media='all' />

    @yield('assets')

</head>

<body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
        @include('partials.nav')
        
        @yield('content')

        @include('partials.footer')

        <div class="greennature-payment-lightbox-overlay" id="greennature-payment-lightbox-overlay"></div>
    </div>
    <!-- body-wrapper -->

    <script type='text/javascript' src='{{ asset('vendors/main_template/js/jquery/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('vendors/main_template/js/jquery/jquery-migrate.min.js') }}'></script>
    <script>
        var ms_grabbing_curosr = 'plugins/masterslider/public/assets/css/common/grabbing.html',
            ms_grab_curosr = 'plugins/masterslider/public/assets/css/common/grab.html';
    </script>
    <script type='text/javascript' src='{{ asset('vendors/main_template/plugins/superfish/js/superfish.js') }}'></script>
    <script type='text/javascript' src='{{ asset('vendors/main_template/js/hoverIntent.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('vendors/main_template/plugins/dl-menu/modernizr.custom.js') }}'></script>
    <script type='text/javascript' src='{{ asset('vendors/main_template/plugins/dl-menu/jquery.dlmenu.js') }}'></script>
    <script type='text/javascript' src='{{ asset('vendors/main_template/plugins/jquery.easing.js') }}'></script>
    <script type='text/javascript' src='{{ asset('vendors/main_template/plugins/fancybox/jquery.fancybox.pack.js') }}'></script>
    <script type='text/javascript' src='{{ asset('vendors/main_template/plugins/fancybox/helpers/jquery.fancybox-media.js') }}'></script>
   {{--  <script type='text/javascript' src='{{ asset('vendors/main_template/plugins/fancybox/helpers/jquery.fancybox-thumbs.js') }}'></script> --}}
    <script type='text/javascript' src='{{ asset('vendors/main_template/plugins/flexslider/jquery.flexslider.js') }}'></script>
    <script type='text/javascript' src='{{ asset('vendors/main_template/plugins/jquery.isotope.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('vendors/main_template/js/plugins.js') }}'></script>
    <script type='text/javascript' src='{{ asset('vendors/main_template/plugins/masterslider/public/assets/js/masterslider.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('vendors/main_template/plugins/jquery.transit.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('vendors/main_template/plugins/gdlr-portfolio/gdlr-portfolio-script.js') }}'></script>




    <script>
    (function ( $ ) {
        "use strict";

        $(function () {
            var masterslider_d1da = new MasterSlider();

            // slider controls
      masterslider_d1da.control('arrows'     ,{ autohide:true, overVideo:true  });
      masterslider_d1da.control('bullets'    ,{ autohide:false, overVideo:true, dir:'h', align:'bottom', space:6 , margin:25  });
            // slider setup
            masterslider_d1da.setup("slider_1", {
        width           : 1140,
        height          : 800,
        minHeight       : 0,
        space           : 0,
        start           : 1,
        grabCursor      : false,
        swipe           : true,
        mouse           : false,
        keyboard        : true,
        layout          : "fullwidth",
        wheel           : false,
        autoplay        : false,
                instantStartLayers:false,
        mobileBGVideo:false,
        loop            : true,
        shuffle         : false,
        preload         : 0,
        heightLimit     : true,
        autoHeight      : false,
        smoothHeight    : true,
        endPause        : false,
        overPause       : true,
        fillMode        : "fill",
        centerControls  : true,
        startOnAppear   : false,
        layersMode      : "center",
        autofillTarget  : "",
        hideLayers      : false,
        fullscreenMargin: 0,
        speed           : 20,
        dir             : "h",
        parallaxMode    : 'swipe',
        view            : "basic"
            });
            

            
            $("head").append( "<link rel='stylesheet' id='ms-fonts'  href='http://fonts.googleapis.com/css?family=Montserrat:regular,700%7CCrimson+Text:regular' type='text/css' media='all' />" );

            window.masterslider_instances = window.masterslider_instances || {};
            window.masterslider_instances["5_d1da"] = masterslider_d1da;
         });
        
    })(jQuery);
    </script> 
</body>

<!--  16:08 GMT -->
</html>
