@extends('layouts.admin')

@section('title', 'Tambah Kegiatan')

@section('content')

<div class="content">
	<div class="row">
		<div class="col-md-12">
			
			<section>
				@include('includes.messages')
			
				<form enctype="multipart/form-data" method="post" action="{{ route('admin.kegiatan-insert') }}">
					<div class="row">
						<div class="col-md-12">
							<input class="form-control my-4" style="font-size: 1.5em" type="text" name="judul" required placeholder="Judul">
						</div>
					</div>
					<div class="row">
						@csrf
						<div class="col-md-3 col-sm-12">
							<h6>Featured image</h6>
							<input type="file" name="featured-image" class="form-control" required>
						</div>
						<div class="col-md-9 col-sm-12">
							<h6>Teks narasi</h6>
							<textarea name="narasi" id="ckeditor" required placeholder="Narasi profil"></textarea>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
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
		filebrowserUploadMethod: 'form',
		height: 500
	});
</script>

@endsection