@extends('admin.admin')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Filter
				</div>
				<div class="card-body">
					<form action="{{url('komen/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
						<input type="text" class="form-control" name="nama" value="{{$nama ??""}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Komen</label>
						<input type="text" class="form-control" name="nama" value="{{$komen ??""}}">
						</div>
						<button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
					</form>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					Data Komen
					<a href="{{url('komen/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table">
							<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>Nama</th>
									<th>Komen</th>

							</thead>
								<tbody>
									@foreach($list_komen as $komen)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>
											<div class="btn-group">
											<a href="{{url('komen', $komen->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('komen', $komen->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.utils.delete', ['url' => url('komen', $komen->id)])
											</div>
										</td>
										<td>{{$komen->nama}}</td>
										<td>{{$komen->komentar}}</td>
										
									</tr>
									@endforeach
								</tbody>
								
					</table>
				</div>
			</div>	
		</div>	
	</div>	
</div>
@endsection