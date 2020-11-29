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
					<form action="{{url('artikel/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Judul</label>
						<input type="text" class="form-control" name="judul" value="{{$judul ??""}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Tanggal</label>
						<input type="text" class="form-control" name="tanggal" value="{{$tanggal ??""}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Tags</label>
						<input type="text" class="form-control" name="tags" value="{{$tags ??""}}">
						</div>
						<button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
					</form>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					Data Artikel
					<a href="{{url('artikel/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table">
							<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>Judul</th>
									<th>Konten</th>
									<th>Tanggal</th>
									<th>Tags</th>

							</thead>
								<tbody>
									@foreach($list_artikel as $artikel)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>
											<div class="btn-group">
											<a href="{{url('artikel', $artikel->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('artikel', $artikel->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.utils.delete', ['url' => url('artikel', $artikel->id)])
											</div>
										</td>
										<td>{{$artikel->judul}}</td>
										<td>{{$artikel->konten}}</td>
										<td>{{$artikel->tanggal}}</td>
										<td>{{$artikel->tags}}</td>
										
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