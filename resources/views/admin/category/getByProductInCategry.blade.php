@extends('admin.layouts.master')
@section('content')


<div class="container">
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('index-category')}}">Danh Mục</a></li>
			<li class="breadcrumb-item active" aria-current="page">{{isset($data->name)?$data->name :''}}</li>
			
		</ol>
	</nav>
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<h1 class="card-title">{{isset($data->name)?$data->name :''}}</h1>
						<h4>Sản phẩm ({{!empty($data->products)?$data->products->count():'0'}})</h4>
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
							@if(!empty($data->products) > 0 )
							@foreach($data->products as $product)
							<tr class="">
								<td>{{$product->id}}</td>
								<td>{{$product->name}}</td>
								<td>{{$product->description}}</td>
								<td><img style="width: 80px" src="{{asset("images/$product->image")}}" alt=""></td>
								<td><a href="{{route('get-action-product',['status',$product->id])}}" class="btn {{$product->getStatuts($product->status)['class']}}">{{$product->getStatuts($product->status)['name']}}</a></td>
								<td><a href="{{route('get-action-product',['pro_hot',$product->id])}}" class="btn {{$product->getHot($product->pro_hot)['class']}}">{{$product->getHot($product->pro_hot)['name']}}</a></td>
								<td>
									<?php 
									echo Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->diffForHumans();;
									?>
								</td>
								<td>
									<a title="xem chi tiết" href="{{route('show-product-admin',$product->id)}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>

									<a title="sửa sản phẩm" href="{{route('edit-product',$product->id)}}"><button class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></button></a>
									<a title="xóa sản phẩm" onclick="return confirm('Bạn có muốn xóa không')" href="{{route('delete-product',$product->id)}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
								</td>    
							</tr>
							@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection



