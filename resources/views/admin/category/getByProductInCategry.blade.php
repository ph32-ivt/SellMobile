@extends('admin.layouts.master')
@section('content')


<div class="container">
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<h5 class="card-title">Thể loại{{$data->name}}</h5>
					</div>
				</div>
				<div class="table-responsive">
					<table style="text-align: left" class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>ID</th>
								<th>Tên sản phẩm</th>
								<th width="250">Mô tả</th>
								<th>Hình ảnh</th>
								<th>Nổi Bật</th>
								<th>Ẩn/Hiện</th>
								<th>Ngày đăng</th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody id="dataCategory">
							@foreach($data->products as $product)
							<tr class="">
								<td>{{$product->id}}</td>
								<td>{{$product->name}}</td>
								<td>{{$product->description}}</td>
								<td><img style="width: 80px" src="{{asset("images/$product->image")}}" alt=""></td>
								<td>{{$product->status}}</td>
								<td>{{$product->pro_hot}}</td>
								<td>
									<?php 
									echo Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->diffForHumans();;
									?>
								</td>
								<td>
									<a href="{{route('show-category',$product->id)}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
									<a href="{{route('edit-category',$product->id)}}"><button class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></button></a>
									<a href="{{route('delete-category',$product->id)}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
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



