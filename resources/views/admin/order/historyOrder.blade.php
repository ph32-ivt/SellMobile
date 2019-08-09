@extends('admin.layouts.master')
@section('content')
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('index-order')}}">Đơn Hàng</a></li>
			<li class="breadcrumb-item active" aria-current="page">Lịch sử xóa</li>
		</ol>
	</nav>
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						<h5 class="card-title">Đơn Hàng Đã Xóa</h5>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>STT</th>
								<th>Tên khách hàng</th>
								<th>Số điện thoại</th>
								<th>Địa chỉ</th>
								<th>Trạng thái</th>
								
								<th colspan="3">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($orderHistory as $orderHistory)
							<tr>
								<td>1</td>
								<td>{{$orderHistory->name}}</td>
								<td>{{$orderHistory->phone}}</td>
								<td>{{$orderHistory->address}}</td>
								<td>
									<a href="#" class="btn btn-outline-danger">{{$orderHistory->status == 1?'Đã Duyệt':'Chưa Duyệt'}}</a>
								</td>
								<td>
									<a title="Lấy lại dữ liệu" href="{{route('restore-history-order',$orderHistory->id)}}"><button class="btn btn-outline-info"><i class="fas fa-sync-alt"></i></button></a>
									<a title="Xem Chi tiết Order" href="{{route('history-order-detail',$orderHistory->id)}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
									<a title="Xóa Vĩnh Viễn" href="{{route('forceDelete-history-order',$orderHistory->id)}}" onclick="return confirm('Bạn có chắc chắn xóa không')"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
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


