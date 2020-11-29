@extends ('admin.admin')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Artikel
					</div>
						<div class="card-body">
							<h3>{{$artikel->judul}}</h3>
							<hr>
							<p>
								Konten : {{$artikel->konten}} |
								Tanggal : {{$artikel->tanggal}} |
								Tags : {{$artikel->tags}} |
								Penulis : {{$artikel->penulis->username}}
							</p>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection