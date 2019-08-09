@extends('admin.layouts.master')
@section('content')
<div class="container">
	<a href="{{route('index-order')}}"><i class="fas fa-long-arrow-alt-left"></i>Quya lại</a>
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						<h5 class="card-title">Tìm thấy {{$order->count()}} Đơn hàng</h5>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>STT</th>
								<th>Tên khách hàng</th>
								<th>Email</th>
								<th>Số điện thoại</th>
								<th>Địa chỉ</th>
								<th>Chú thích</th>
								<th>Trạng thái</th>
								<th>Người Duyệt</th>
								<th colspan="3">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($order as $order)
							<tr>
								<td>1</td>
								<td>{{$order->name}}</td>
								<td>{{$order->email}}</td>
								<td>{{$order->phone}}</td>
								<td>{{$order->address}}</td>
								<td>{{$order->note}}</td>
								<td>
									<button class="btn btn-primary">
										{{$order->getStatus($order->status)['name']}}
									</button>
								</td>
								<td>{{$order->user_id}}</td>
								<td>
									
									<a href="{{route('show-order-detail',$order->id)}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
									
									<a href="{{route('delete-order',$order->id)}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
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


