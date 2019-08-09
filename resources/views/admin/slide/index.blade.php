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
						<h1 class="card-title">Hình ảnh Slide</h1>
						
					</div>
					<div class="col-md-2">

						<button class="mb-2 btn btn-primary"><a href="{{route('create-slider')}}" style="color:#ffffff; text-transform: uppercase; font-size: 20px;"><i class="fas fa-plus-circle" style="font-size: 30px"></i> Thêm mới</a></button>

					</div>
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>STT</th>
								<th>Hình Ảnh</th>
								<th>Ngày đăng</th>
								<td>Trạng thái</td>
								<th class="pl-5">Action</th>

							</tr>
						</thead>
						<tbody id="dataCategory">
							@php
							$stt = 1;
							@endphp
							@foreach($slider as $slider)
							<tr class="">
								<td>{{$stt++}}</td>
								<td>
									<img width="300" height="200" src="{{asset("/images/slides/$slider->image")}}" alt="">
								</td>
								
								<td>
									@php 
									echo Carbon\Carbon::createFromTimeStamp(strtotime($slider->created_at))->diffForHumans();;
									@endphp
								</td>
								<td><a class="{{$slider->getStatus($slider->status)['class']}}" href="{{route('update-status-slide',$slider->id)}}">{{$slider->getStatus($slider->status)['name']}}</a></td>
								<td>
									<a title="xóa slide" onclick="return confirm('Bạn có muốn xóa không')" href="{{route('destroy-silder',$slider->id)}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
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



