@extends('admin.layouts.master')
@section('content')
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('index-order')}}">Đơn Hàng</a></li>
			<li class="breadcrumb-item active" aria-current="page">Đơn Hàng Chưa Duyệt</li>
		</ol>
	</nav>
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						<h5 class="card-title">Đơn Hàng Chưa Duyệt</h5>
						<span><a href="{{route('order-da-duyet')}}"><button class="btn btn-outline-info">Đơn hàng đã duyệt</i></button></a></span>
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
								
								<th colspan="3">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($disAgree as $orderDisAgree)
							<tr>
								<td>1</td>
								<td>{{$orderDisAgree->name}}</td>
								<td>{{$orderDisAgree->email}}</td>
								<td>{{$orderDisAgree->phone}}</td>
								<td>{{$orderDisAgree->address}}</td>
								<td>{{$orderDisAgree->note}}</td>
								<td>

									<a title="đơn hàng chưa duyệt" href="{{route('duyet.don.hang',$orderDisAgree->id)}}" class="btn btn-outline-danger">{!!$orderDisAgree->getStatus($orderDisAgree->status)['name']!!}</a>
								</td>
								<td>
									<a title="xem chi tiết" href="{{route('show-order-detail',$orderDisAgree->id)}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
									<a title="xóa đơn hàng" onclick="return confirm('bạn có chắc muốn xóa đơn hàng này không')" href="{{route('delete-order',$orderDisAgree->id)}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
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


