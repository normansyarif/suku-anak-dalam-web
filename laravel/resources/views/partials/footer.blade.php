<footer class="footer-wrapper">
    <div class="footer-container container">
        <div class="footer-column three columns" id="footer-widget-1">
            <div id="text-5" class="widget widget_text greennature-item greennature-widget">
                <div class="textwidget">
                    <p><img src="{{ asset('vendors/main_template/images/logo.png') }}" style="width: 170px;" alt="" /></p>
                    <p>{{ $footer['teksFooter'] }}</p>
                </div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-2">
            <div id="text-9" class="widget widget_text greennature-item greennature-widget">
                <h3 class="greennature-widget-title">Kontak Info</h3>
                <div class="clear"></div>
                <div class="textwidget"><span class="clear"></span><span class="greennature-space" style="margin-top: -6px; display: block;"></span> Alamat: {{ $footer['alamat'] }}

                    <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-phone" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> {{ $footer['telp'] }}

                    <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-envelope-o" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> {{ $footer['email'] }}</div>
                </div>
            </div>
            <div class="footer-column three columns" id="footer-widget-4">
                <div id="gdlr-recent-portfolio2-widget-6" class="widget widget_gdlr-recent-portfolio2-widget greennature-item greennature-widget">
                    <h3 class="greennature-widget-title">Lokasi</h3>
                    <div class="clear"></div>
                    <div class="greennature-recent-port2-widget">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68774.96971996834!2d103.43775644696697!3d-1.89592847944427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2f868ac1bb88c9%3A0xa7e769a2e1a1852d!2sNyogan%2C%20Mestong%2C%20Muaro%20Jambi%20Regency%2C%20Jambi!5e0!3m2!1sen!2sid!4v1594979625563!5m2!1sen!2sid" height="240" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <p style="font-weight: bold; margin-top: 20px; font-size: 1.1em"><a href="{{ route('akses') }}">Akses ke Lokasi</a></p>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </footer>