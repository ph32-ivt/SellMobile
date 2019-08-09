@extends('admin.layouts.master')
@section('content')
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('index-order')}}">Đơn Hàng</a></li>
			<li class="breadcrumb-item active" aria-current="page">Đơn Hàng Đã Duyệt</li>
		</ol>
	</nav>
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						<h5 class="card-title">Đơn Hàng Đã Duyệt</h5>
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
							@php
								$stt = 1;
							@endphp
							@foreach($agree as $orderAgree)
							<tr>
								<td>{{$stt++}}</td>
								<td>{{$orderAgree->name}}</td>
								<td>{{$orderAgree->email}}</td>
								<td>{{$orderAgree->phone}}</td>
								<td>{{$orderAgree->address}}</td>
								<td>{{$orderAgree->note}}</td>
								<td>
									<button title="đơn hàng đã duyệt" class="btn btn-primary">
										{{$orderAgree->getStatus($orderAgree->status)['name']}}
									</button>
								</td>
								@foreach($user as $us)

									@if($orderAgree->user_id == $us->id)
								<td>{{$us->name}}</td>
									@endif
								@endforeach

								<td>
									
									<a title="xem chi tiết" href="{{route('show-order-detail',$orderAgree->id)}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
									
									<a title="xóa đơn hàng" onclick="return confirm('bạn có chắc muốn xóa đơn hàng này không')" href="{{route('delete-order',$orderAgree->id)}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
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


