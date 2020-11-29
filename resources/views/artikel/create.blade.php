@extends('admin.admin')

@section('content')
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12 mt-5">
				<div class = "card">
					<div class ="card-header">
					Tambah Data Artikel
					</div>
					<div class="card-body">
					<form action="{{url('artikel')}}" method="post">
						@csrf
					
					<div class="form-group">
					<label for="" class ="control-label">Judul</label>
					<input type="text" class="form-control" name="judul">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
					<label for="" class ="control-label">Konten</label>
					<input type="text" class="form-control" name="konten">
					</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
					<label for="" class ="control-label">Tanggal</label>
					<input type="text" class="form-control" name="tanggal">
					</div>
					<div class="col-md-3">
						<div class="form-group">
					<label for="" class ="control-label">Tags</label>
					<input type="text" class="form-control" name="tags">
					</div>
					</div>
					
					<button class = "btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
					</form>
						<table>
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection 