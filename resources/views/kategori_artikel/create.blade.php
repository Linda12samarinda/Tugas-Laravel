@extends('layouts.app')

@section ('content')

<div class = "contrainer">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Tambah kategori_artikel</div>
					<div class="card-body">
						<form method="POST" action="{!! route('kategori_artikel.store') !!}">
							@include('kategori_artikel.form');
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	

@endsection