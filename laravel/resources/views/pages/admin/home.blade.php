@extends('layouts.admin')

@section('title', 'Pengaturan Beranda')

@section('content')

<div class="content">
	<div class="row">
		<div class="col-md-12">
			
			<section>
				@include('includes.messages')
				<h5 class="mb-4">Narasi Beranda</h5>
				
				<form method="post" action="{{ route('admin.beranda-update') }}" enctype="multipart/form-data">
					<div class="row">
						@csrf
						<div class="col-md-3 col-sm-12">
							<h6>Featured image</h6>
							<img src="{{ url($berandaImage) }}" style="width: 100%; height: auto;">
							<input type="file" name="beranda_image" class="form-control">
						</div>
						<div class="col-md-9 col-sm-12">
							<h6>Teks narasi</h6>
							<textarea id="ckeditor" name="narasi" required placeholder="Narasi beranda">{!! $berandaNarasi !!}</textarea>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</form>

			</section>


			<section class="beranda-menu">
				<form action="{{ route('admin.beranda-menu-update') }}" method="post">
					@csrf
					<h5 class="my-4">Deskripsi Menu Beranda</h5>
					<div>
						<h6>Kegiatan</h6>
						<input type="text" name="kegiatan" required class="form-control" value="{{ $kegiatan }}" >
					</div>
					<div>
						<h6>Editorial</h6>
						<input type="text" name="editorial" required class="form-control" value="{{ $editorial }}" >
					</div>
					<div>
						<h6>Galeri</h6>
						<input type="text" name="galeri" required class="form-control" value="{{ $galeri }}" >
					</div>
					<div>
						<h6>Mitra Kerjasama</h6>
						<input type="text" name="mitra" required class="form-control" value="{{ $mitra }}" >
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</section>

			<section class="beranda-menu">
				<form method="post" action="{{ route('admin.footer-update') }}">
					@csrf
					<h5 class="my-4">Footer</h5>
					<div>
						<h6>Teks footer</h6>
						<input type="text" name="teks-footer" required class="form-control" value="{{ $footer['teksFooter'] }}">
					</div>
					<div>
						<h6>Alamat</h6>
						<input type="text" name="alamat" required class="form-control" value="{{ $footer['alamat'] }}">
					</div>
					<div>
						<h6>No Telp</h6>
						<input type="text" name="telp" required class="form-control" value="{{ $footer['telp'] }}">
					</div>
					<div>
						<h6>Email</h6>
						<input type="text" name="email" required class="form-control" value="{{ $footer['email'] }}">
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</section>

		</div>
	</div>
</div>

@endsection

@section('scripts')

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

<script type="text/javascript">
	CKEDITOR.replace( 'ckeditor', {
		filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
		filebrowserUploadMethod: 'form'
	});
</script>

@endsection