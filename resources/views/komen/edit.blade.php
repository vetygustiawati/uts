@extends ('admin.admin')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Ubah Data Komen
					</div>
						<div class="card-body">
							<form action="{{url('komen', $komen->id)}}" method="post">
							@csrf
							@method("PUT")
							<div class="form-group">
								<label for="" class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama" value="{{$komen->nama}}">>
							</div>
							<div class="form-group">
								<label for="" class="control-label">Komentar</label>
								<input type="text" class="form-control" name="nama" value="{{$komen->komentar}}">>
							</div>
							
									<button class="btn btn-dark float-right"><i class="fa fa-save">	</i>Simpan</button>
									</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection