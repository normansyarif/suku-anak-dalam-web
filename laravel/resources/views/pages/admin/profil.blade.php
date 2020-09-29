@extends('layouts.admin')

@section('title', 'Pengaturan Profil')

@section('content')

<div class="content">
	<div class="row">
		<div class="col-md-12">
			
			<section>
				@include('includes.messages')
				<h5 class="mb-4">Narasi Profil</h5>
				
				<form action="{{ route('admin.profil-update') }}" method="post">
					<div class="row">
						@csrf
						<div class="col-md-10 offset-md-1 col-sm-12">
							<h6>Teks narasi</h6>
							<textarea required name="narasi" id="ckeditor" required placeholder="Narasi profil">{!! $narasi !!}</textarea>
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