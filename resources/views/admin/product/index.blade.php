@extends('admin.layouts.master')
@section('content')
<div class="container">
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						<h5 class="card-title">Sản Phẩm</h5>
					</div>
					<div class="col-md-2">
						<button class="mb-2 btn btn-primary"><a href="{{route('create-product')}}">Thêm mới</a></button>			
					</div>
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>ID</th>
								<th>Tên Sản Phẩm</th>
								<th >Mô Tả</th>
								<th>Hình Ảnh</th>
								<th>Thể Loại</th>
								<th>Trạng Thái</th>
								<th>Nổi Bật</th>
								<th>Ngày Đăng</th>
								<th colspan="2">Action</th>

							</tr>
						</thead>
						<tbody id="dataProduct">
							@if(!empty($products)==true)

							@foreach($products as $product)
							

							<tr>
								<td>{{$product->id}}</td>
								<td>{{$product->name}}</td>
								<td >{!!$product->description!!}</td>
								<td><img style="width: 80px" src="{{asset("images/$product->image")}}" alt=""></td>
								@if (!empty($product->category))
								<td>{{$product->category->name}}</td>
								@else
								<td>
								</td>
								@endif
								
								<td><a href="{{route('get-action-product',['status',$product->id])}}" class="btn {{$product->getStatuts($product->status)['class']}}">{{$product->getStatuts($product->status)['name']}}</a></td>
								<td><a href="{{route('get-action-product',['pro_hot',$product->id])}}" class="btn {{$product->getHot($product->pro_hot)['class']}}">{{$product->getHot($product->pro_hot)['name']}}</a></td>

								<td>
									<?php 
									echo Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->diffForHumans();;
									?>
								</td>
								<td>
									<a href="{{route('show-product',$product->id)}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
									<a href="{{route('edit-product',$product->id)}}"><button class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></button></a>
									<a onclick="return confirm('Bạn có muốn xóa không')" href="{{route('delete-product',$product->id)}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
								</td>    
							</tr>
							@endforeach
							@endif
						</tbody>
					</table>
				</div>
				{{ $products->links() }}
			</div>
		</div>
	</div>
</div>

@endsection
