@extends('layouts.main')

@section('assets')

<style type="text/css">
	img {
		width: 100%;
		height: auto;
	}

	.container {
		width: 100%;
		text-align: center;
	}

	.polaroid {
		background-color: #fff;
		padding: 1em;
		box-shadow: 0 0.25em 1em rgba(0, 0, 0, 0.2);
	}

	.caption {
		font-size: 2em;
		text-align: center;
		-webkit-transition: all 0.3s;
		transition: all 0.3s;
	}

	.item {
		display: inline-block;
		margin-top: 2em;
	}

	.item .polaroid:before {
		content: "";
		position: absolute;
		z-index: -1;
		-webkit-transition: all 0.3s;
		transition: all 0.3s;
	}


	.item:nth-of-type(4n+1) {
		-webkit-transform: scale(0.8, 0.8) rotate(0deg);
		transform: scale(0.8, 0.8) rotate(0deg);
		-webkit-transition: all 0.3s;
		transition: all 0.3s;
	}

	.item:hover {
		-webkit-transform: scale(1, 1) rotate(0deg);
		transform: scale(1, 1) rotate(0deg);
		-webkit-filter: none;
		filter: none;
		-webkit-transition: all 0.3s;
		transition: all 0.3s;
	}

	.item:hover .polaroid:before {
		content: "";
		position: absolute;
		width: 90%;
		height: 90%;
		bottom: 0%;
		right: 5%;
		z-index: -1;
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		-webkit-transition: all 0.3s;
		transition: all 0.3s;
	}

</style>

@endsection

@section('content')

<div class="greennature-page-title-wrapper header-style-5-title-wrapper">
	<div class="greennature-page-title-overlay"></div>
	<div class="greennature-page-title-container container">
		<h1 class="greennature-page-title">Akses ke Suku Anak Dalam</h1>
	</div>
</div>
<!-- is search -->
<div class="content-wrapper">
	<div class="greennature-content">

		<!-- Above Sidebar Section-->

		<!-- Sidebar With Content Section-->
		<div class="with-sidebar-wrapper">
			<section id="content-section-1">

				<div class="row">
					<div class="col-md-4 offset-md-4 col-sm-12 col-xs-12">
						<div class="item">
							<figure class="polaroid">
								<img src="{{ asset('vendors/main_template/images/sad/mapsindo.jpg') }}" alt="" />
								<figcaption class="caption">Lokasi Suku Anak Dalam</figcaption>
							</figure>
						</div>
						<p style="text-align: center; font-size: 1.1em">Titik Koordinat Suku Anak Dalam (<a target="__blank" href="https://www.google.com/maps/place/Nyogan,+Mestong,+Muaro+Jambi+Regency,+Jambi/@-1.8940301,103.4029335,12z/data=!3m1!4b1!4m5!3m4!1s0x2e2f868ac1bb88c9:0xa7e769a2e1a1852d!8m2!3d-1.8668021!4d103.485862">-1.8940301,103.4029335</a>)</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="item">
							<figure class="polaroid">
								<img src="{{ asset('vendors/main_template/images/sad/mapsjambi.jpg') }}" alt="" />
								<figcaption class="caption">Akses dari Kota Jambi</figcaption>
							</figure>
						</div>
						<ul style="font-size: 1.1em; width: 90%; padding-left: 10px" >
							<li>Dapat diakses menggunakan kendaraan umum, kendaraan pribadi, dan kendaraan rental</li>
							<li>Jarak tempuh dari Kota Jambi sekitar 48 km</li>
							<li>Waktu tempuh dari Kota Jambi sekitar 1 jam 16 menit</li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="item">
							<figure class="polaroid">
								<img src="{{ asset('vendors/main_template/images/sad/mapsbulian.jpg') }}" alt="" />
								<figcaption class="caption">Akses dari Muara Bulian</figcaption>
							</figure>
						</div>
						<ul style="font-size: 1.1em; width: 90%; padding-left: 10px" >
							<li>Dapat diakses menggunakan kendaraan umum, kendaraan pribadi, dan kendaraan rental</li>
							<li>Jarak tempuh dari Muara Bulian sekitar 69 km</li>
							<li>Waktu tempuh dari Muara Bulian sekitar 1 jam 53 menit</li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-12 col-xs-12" style="margin-bottom: 80px">
						<div class="item">
							<figure class="polaroid">
								<img src="{{ asset('vendors/main_template/images/sad/mapspalembang.jpg') }}" alt="" />
								<figcaption class="caption">Akses dari Kota Palembang</figcaption>
							</figure>
						</div>
						<ul style="font-size: 1.1em; width: 90%; padding-left: 10px" >
							<li>Dapat diakses menggunakan kendaraan umum, kendaraan pribadi, dan kendaraan rental</li>
							<li>Jarak tempuh dari Kota Palembang sekitar 246 km</li>
							<li>Waktu tempuh dari Kota Palembang sekitar 7 jam 6 menit</li>
						</ul>
					</div>
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