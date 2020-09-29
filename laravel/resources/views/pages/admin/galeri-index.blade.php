@extends('layouts.admin')

@section('title', 'Pengaturan Galeri')

@section('content')

<div class="content">
	<div class="row">
		<div class="col-md-12">
			
			<section>
				@include('includes.messages')

				<div class="table-responsive">
					<button data-toggle="modal" data-target="#add-modal" type="button" class="btn btn-primary pull-right">Tambah</button>
					<table class="table">
						<thead>
							<tr>
								<th>Foto</th>
								<th>Caption</th>
								<th>Waktu publikasi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $item)
							<tr>
								<td>
									<a target="__blank" href="{{ url($item->foto) }}"><img style="width: 80px" src="{{ url($item->foto) }}"></a>
								</td>
								<td>
									{{ $item->judul }}
								</td>
								<td>{{ date('Y-m-d H:i', strtotime($item->created_at)) }}</td>
								<td>
									<button onclick="
									$('#caption').val('{{ $item->judul }}');
									$('#foto-id').val('{{ $item->id }}');
									$('#caption-modal').modal('show');
									" class="btn btn-sm btn-primary">Caption</button>
									<button class="btn btn-sm btn-danger" onclick="
									if(confirm('Yakin hapus?')) {
										$(this).find('form').submit();
									}
									">
									Hapus
									<form method="post" action="{{ route('admin.galeri-delete', $item->id) }}">
										@csrf
									</form>
								</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

		</section>

	</div>
</div>
</div>

{{-- Modal --}}
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="add-modal-label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="post" action="{{ route('admin.galeri-insert') }}" enctype="multipart/form-data">
				@csrf
				<div class="modal-header">
					<h5 class="modal-title" id="add-modal-label">Tambah Foto</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="file" name="foto" required class="form-control">
					<input type="text" name="caption" required class="form-control my-3" placeholder="Caption">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>


<div class="modal fade" id="caption-modal" tabindex="-1" role="dialog" aria-labelledby="caption-modal-label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="post" action="{{ route('admin.ubah-caption') }}">
				@csrf
				<div class="modal-header">
					<h5 class="modal-title" id="caption-modal-label">Ubah caption</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="text" id="caption" name="caption" required class="form-control" placeholder="Caption">
					<input type="hidden" id="foto-id" name="foto-id">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection

@section('scripts')

@endsection