@extends ('admin.admin')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Komen
					</div>
						<div class="card-body">
							<h3>{{$komen->nama}}</h3>
							<h4>{{$komen->komentar}}</h4>
							<hr>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection