@extends('admin.layouts.master')
@section('content')
<nav>
	<div class="nav nav-tabs" id="nav-tab" role="tablist">
		<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Thông tin sản phẩm</a>
	</div>
</nav>
<div class="tab-content" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
		<div class="row">
			<div class="col-md-7">
				<h1>Tên sản phẩm:<i>{{!empty($product->name)?$product->name:''}}</i></h1>

				<h2>Giá : <i style="color:red">{{!empty($product->productDetail->price)?number_format($product->productDetail->price):''}} VND</i></h2>
			</div>
			<div class="col-md-4 text-right">
				
				<a href="{{route('edit-product',$product->id)}}"><button class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i>Sửa</button></a>
				<a onclick="return confirm('Bạn có muốn xóa không')" href="{{route('delete-product',$product->id)}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i>Xóa</button></a>
			</div>
		</div>
		
		<hr>
		<div class="row">	
			<div class="col-md-4">
				<img width="300px" height="400px" src="{{asset("/images/$product->image")}}" alt="">
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Thông số kĩ thuật</h2>
				<table class="table table-sm table-inverse table-hover">
					<tr>
						<th>Thương hiệu :</th>
						<td>
							{{!empty($product->category->name) ? $product->category->name:''}}
						</td>
					</tr>
					<tr>
						<th>Màn hình :</th>
						<td>{{!empty($product->productDetail->display) ? $product->productDetail->display:''}}</td>
					</tr>
					<tr>
						<th>Chíp xử lý : </th>
						<td>{{!empty($product->productDetail->cpu) ? $product->productDetail->cpu:''}}</td>
					</tr>
					<tr>
						<th>Ram :</th>
						<td>{{!empty($product->productDetail->memory) ? $product->productDetail->memory:''}}</td>
					</tr>
					<tr>
						<th>Camera :</th>
						<td>{{!empty($product->productDetail->camera) ? $product->productDetail->camera:''}}</td>
					</tr>
					<tr>
						<th>Pin :</th>
						<td>{{!empty($product->productDetail->pin) ? $product->productDetail->pin:''}}</td>
					</tr>
					<tr>
						<th>Sim :</th>
						<td>{{!empty($product->productDetail->sim) ? $product->productDetail->sim:''}}</td>
					</tr>
					<tr>
						<th>Option :</th>
						<td>{{!empty($product->productDetail->option) ? $product->productDetail->option:''}}</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="description">
			{!! (!empty($product->description)?$product->description:'') !!}
		</div>
		<br>	
		<div class="content ml-3">	
			{!! (!empty($product->content)?$product->content:'')!!}		
		</div>
	</div>

</div>
@endsection