@extends('admin.layouts.master')
@section('content')
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('index-order')}}">Đơn Hàng</a></li>
			@if($order->status == 1)
			
				<li class="breadcrumb-item"><a href="{{route('order-da-duyet')}}">Đơn Hàng Đã Duyệt</a></li>
			
			@else
			
				<li class="breadcrumb-item"><a href="{{route('order-disAgree')}}">Đơn Hàng Chưa Duyệt</a></li>	
			
			@endif

			<li class="breadcrumb-item active" aria-current="page">Chi tiết đơn hàng</li>
		</ol>
	</nav>
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						<h5 class="card-title">Đơn Hàng : {{!empty($order->name)?$order->name:''}}</h5>

					</div>
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>STT</th>
								<th>Tên sản phẩm</th>
								<th>Số lượng</th>
								<th>Giá</th>
								<th>Tổng cộng</th>
								<th colspan="3">Action</th>
							</tr>
						</thead>
						<tbody>
							@php
							$stt =1;
							$total=0;
							$subtotal=0;
							@endphp
							@if(!empty($order->orderDetails))
							@foreach($order->orderDetails as $orderDetail)
							<tr>
								<td>{{$stt++}}</td>



								<td>{{$orderDetail->product->name}}</td>

								<td>{{$orderDetail->quantity}}</td>
								<td>{{number_format($orderDetail->price)}} VND</td>
								<td>
									@php
									$qty = $orderDetail->quantity;
									$price = $orderDetail->price;
									$subtotal = $qty * $price;
									$total += $subtotal;
									@endphp
									{{number_format($subtotal)}} VND
								</td>
								<td>
									<a title="xóa" onclick="return confirm('bạn có muốn xóa sản phẩm này k')" href="{{route('delete-oderDetail',$orderDetail->id)}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
								</td>    
							</tr>

							@endforeach
							@endif
						</tbody>
						<h4>Tổng tiền: {{number_format($total)}} VND</h4>	
						<div>

						</div>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


