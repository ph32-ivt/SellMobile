@extends('admin.layouts.master')
@section('content')
@if(session('success'))
<div class="alert alert-info">
	{{session('success')}}
</div>
@endif
<div class="container">
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						<h1 class="card-title">Danh sách các Bình Luận</h1>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>STT</th>
								<th>Tên sản phẩm</th>
								<th>Tên khách hàng</th>
								<th>Email</th>
								<th>Nội dung</th>
								<th>Ngày Bình luận</th>
								<th>Trả lời BÌnh Luận</th>
								<th colspan="3">Action</th>
							</tr>
						</thead>
						<tbody>
							@php
							$stt = 1;
							@endphp
							@foreach($listComment as $listComment)
							<tr>
								<td>{{$stt++}}</td>
								<td>{{$listComment->product->name}}</td>
								<td>{{$listComment->name}}</td>
								<td>{{$listComment->email}}</td>
								<td>
									<h4 style="color:red">{{$listComment->title}}</h4>
									<p>{{$listComment->content}}</p>
								</td>
								<td>
									@php 
									echo Carbon\Carbon::createFromTimeStamp(strtotime($listComment->created_at))->diffForHumans();;
									@endphp
								</td>

								@if(!empty($listComment->parent_id) == $listComment->id)
								<td>
									{{$listComment->name}}
								</td>
								@else
								<td></td>
								@endif
								<td><a href="{{route('show-product',$listComment->product->id)}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
									<a onclick="return confirm('Bạn có chắc muốn xóa bình luận nay không')" href="{{route('destroy-comment',$listComment->id)}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
								</td>
							</td>    
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection