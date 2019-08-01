@extends('admin.layouts.master')
@section('content')
<div class="container">
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						
						
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
							@endphp
							@if(!empty($orderHistoryDetail))
							@foreach($orderHistoryDetail as $orderDetail)
							<tr>
								<td>{{$stt++}}</td>
								<td>{{$orderDetail->id}}</td>
								<td>{{$orderDetail->product_id}}</td>
								<td>{{$orderDetail->quantity}}</td>
								<td>{{$orderDetail->price}}</td>
								<td>
									@php
									$qty = $orderDetail->quantity;
									$price = $orderDetail->price;
									$total = $qty * $price;
									@endphp
									{{$total}}
								</td>
								<td>
									<a href="{{$orderDetail->id}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
								</td>    
							</tr>
													
							@endforeach
							@endif
						</tbody>
						<h1>Tổng tiền
							
						</h1>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


