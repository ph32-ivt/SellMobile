@extends('customer.layouts.master')
@section('content')


<div class="row">
	<div class="col-xs-2 col-sm-2 col-md-2" ></div>
	<div class="col-xs-8 col-sm-8 col-md-8" >
		<p class="bg-success">Danh sách đơn hàng</p>
		@if(count($order))
		@foreach($order as $item)
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Tên người đặt</th>
					<th>Số điện thoại</th>
					<th>Email</th>
					<th>Địa chỉ</th>
					<th>Ngày đặt </th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$item->name}}</td>
					<td>0{{$item->phone}}</td>
					<td>{{$item->email}}</td>
					<td>{{$item->address}}</td>
					<td>{{$item->created_at}}</td>
				</tr>
				<tr>
					<td colspan="5">
						<table class="table table-bordered table-hover">
						<legend>order detail</legend>
				<thead>
					<tr>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá</th>
						<th>Ngày đặt</th>
					</tr>
				</thead>
				<tbody>
					@foreach($item->orderDetails as $detail)
						<tr>
							<td>{{$detail->product->name}}</td>
							<td>{{$detail->quantity}}</td>
							<td>{{number_format($detail->product->productDetail->price)}} VND</td>
							<td>{{$detail->created_at}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
					</td>
				</tr>
			</tbody>
		</table>
		
		<div>
			
		</div>
		@endforeach
		@else
		<div class="row">
			<p class="alert-warning">Bạn chưa có đơn hàng nào !Vui lòng quay lại <a href="{{route('home')}}">trang chủ</a> để đặt hàng</p>
		</div>

		@endif
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2" ></div>
</div>






@endsection