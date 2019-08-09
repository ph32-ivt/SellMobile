@extends('admin.layouts.master')
@section('content')

@if(session('sussecc'))
<div class="alert alert-info">
	{{session('sussecc')}}
</div>
@endif
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('index-category')}}">Danh Mục</a></li>
			<li class="breadcrumb-item active" aria-current="page">Lịch sử xóa</li>
		</ol>
	</nav>
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<h5 class="card-title">Lịch sử xóa Thể loại</h5>
						
					</div>
					
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>ID</th>
								<th>Tên thể loại</th>
								<th>Thới gian</th>
								<th class="pl-3">Action</th>

							</tr>
						</thead>
						<tbody id="dataCategory">
							<?php 
							$stt = 1;
							?>				
							@foreach($categories as $category)

							<tr class="">
								<td>{{$stt++}}</td>
								<td>{{$category->name}}</td>
								<td>
									<?php 
									echo Carbon\Carbon::createFromTimeStamp(strtotime($category->deleted_at))->diffForHumans();;
									?>
								</td>
								<td>

									<a title="Lấy lại dữ liệu" href="{{route('restore-category',$category->id)}}"><button class="btn btn-outline-info"><i class="fas fa-sync-alt"></i></button></a>
									<a title="Xóa" href="{{route('forceDelete-category',$category->id)}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
								</td>    
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



