@extends('layouts.admin')

@section('title', 'Daftar Mitra')

@section('content')

<div class="content">
	<div class="row">
		<div class="col-md-12">
			
			<section>
				@include('includes.messages')

				<div class="table-responsive">
					<a href="{{ route('admin.mitra.add') }}" class="btn btn-primary pull-right">Tambah</a>
					<table class="table">
						<thead>
							<tr>
								<th>Lembaga/Instansi</th>
								<th>Waktu publikasi</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $item)
							<tr>
								<td>{{ $item->judul }}</td>
								<td>{{ date('Y-m-d H:i', strtotime($item->created_at)) }}</td>
								<td>
									@if($item->published == 0)
									<span class="text-warning">Unpublished</span>
									@else
									<span class="text-success">Published</span>
									@endif
								</td>
								<td>
									<a href="{{ route('mitra-view', $item->id) }}" class="btn btn-sm btn-primary">Lihat</a>
									<a href="{{ route('admin.mitra.edit', $item->id) }}" class="btn btn-sm btn-secondary">Edit</a>
									
									@if($item->published == 0)
									<button class="btn btn-sm btn-success" onclick="
									if(confirm('Publish?')) {
										$(this).find('form').submit();
									}
									">
									Publish
									<form method="post" action="{{ route('admin.mitra-publish', $item->id) }}">
										@csrf
										<input type="hidden" name="type" value="1" required>
									</form>
									</button>

									@else
									<button class="btn btn-sm btn-warning" onclick="
									if(confirm('Unpublish?')) {
										$(this).find('form').submit();
									}
									">
									Unpublish
									<form method="post" action="{{ route('admin.mitra-publish', $item->id) }}">
										@csrf
										<input type="hidden" value="0" name="type" required>
									</form>
									</button>

									@endif

									<button class="btn btn-sm btn-danger" onclick="
									if(confirm('Yakin hapus?')) {
										$(this).find('form').submit();
									}
									">
									Hapus
									<form method="post" action="{{ route('admin.mitra-delete', $item->id) }}">
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

@endsection

@section('scripts')

@endsection