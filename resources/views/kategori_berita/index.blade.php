 @extends('layouts.app')

@section ('content')

<div class = "contrainer">
	<div class="row justify-content-center"
		<div class="col-md-8">
			<div class="card">
				<div class="card-header"> Kategori Berita </div>
					<div class="card-body">
						<a href="{!! route('kategori_berita.create') !!}" class="btn btn-primary"> Tambah Data</a>
						 <table border="1">
						 	<tr>
						 		<td>ID</td>
						 		<td>Nama</td>
						 		<td>User Id</td>
						 		<td>Create</td>
						 		<td>Aksi</td>
						 	</tr>

						 	@foreach($kategori_berita as $item)

						 	<tr>
						 		<td> {!! $item->id !!}</td>
						 		<td> {!! $item->nama !!}</td>
						 		<td> {!! $item->users_id !!}</td>
						 		<td> {!! $item->created_at !!}</td>
						 		<td>
						 			<a href="{!! route('kategori_berita.show',[$item->id])!!}" class="btn btn-sm btn-success">lihat </a></td>
						 	</tr>
						 	@endforeach
								</table>
					</div>
			</div>
		</div>
	</div>
</div>
@endsection 