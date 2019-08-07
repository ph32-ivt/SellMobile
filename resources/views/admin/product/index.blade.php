
@extends('admin.layouts.master')
@section('content')
@if(session('sussecc'))
<div class="alert alert-info">
	{{session('sussecc')}}
</div>
@endif
<div class="container">
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-5"  ><h1 class="card-title ">Sản Phẩm</h1></div>
							<div class="col-md-5">
								<form action="" >
									<input type="text" placeholder="Tên sản phẩm" name="name" value="{{\Request::get('name')}}">
									<button class="btn btn-default"><i style="font-size: 25px" class="fas fa-search"></i></button>
								</form>
							</div>
						</div>
						
						
					</div>
					<div class="col-md-2">
						<div class="col-md-2">
						<button class="mb-2 btn btn-primary"><a href="{{route('create-product')}}" style="color:#ffffff; text-transform: uppercase; font-size: 20px;"><i class="fas fa-plus-circle" style="font-size: 30px"></i> Thêm mới</a></button>
					</div>		
					</div>
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>ID</th>
								<th width="150">Tên Sản Phẩm</th>
								<th >Mô Tả</th>
								<th>Hình Ảnh</th>
								<th>Danh mục</th>
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
								<td>
									<h5>{{$product->name}}</h5>
									<br>
									@if(!empty($product->productDetail->quantity))
									<span>SL nhập : <u>{{$product->productDetail->quantity}}</u> SP</span>
									@endif
									<br>
									@if(!empty($product->productDetail->price))
									<span>Giá SP: {{number_format($product->productDetail->price)}}đ</span>
									@endif
								</td>
								<td >{!!$product->description!!}</td>
								<td><img style="width: 80px" src="{{asset("images/$product->image")}}" alt=""></td>
								@if (!empty($product->category))
								<td>{{$product->category->name}}</td>
								@else
								<td>
									[N\A]
								</td>
								@endif
								
								<td><a href="{{route('get-action-product',['status',$product->id])}}" class="btn {{$product->getStatuts($product->status)['class']}}">{{$product->getStatuts($product->status)['name']}}</a></td>
								<td><a href="{{route('get-action-product',['pro_hot',$product->id])}}" class="btn {{$product->getHot($product->pro_hot)['class']}}">{{$product->getHot($product->pro_hot)['name']}}</a></td>


								<td>
									@php
									echo Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->diffForHumans();
									@endphp
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
				{{ $products->links() }}
			</div>
		</div>
	</div>
</div>

@endsection
