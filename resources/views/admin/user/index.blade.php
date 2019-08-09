@extends('admin.layouts.master')
@section('content')

@if(session('sussecc'))
<div class="alert alert-info">
	{{session('sussecc')}}
</div>
@endif
@if(session('update'))
<div class="alert alert-info">
	{{session('update')}}
</div>
@endif
<div class="container">
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">


					<div class="col-md-6">
						<h1 class="card-title">Quản trị user</h1>
					</div>
					<div class="col-md-6" style="color:#ffffff">
						
						<button class="mb-2 btn btn-primary"><a href="{{route('create-role')}}" style="color:#ffffff; text-transform: uppercase; font-size: 20px;"><i class="fas fa-plus-circle" style="font-size: 30px"></i> Thêm mới Group</a></button>



						<button class="mb-2 btn btn-primary"><a href="{{route('create-user')}}" style="color:#ffffff; text-transform: uppercase; font-size: 20px;"><i class="fas fa-plus-circle" style="font-size: 30px"></i> Thêm mới User</a></button>

					</div>
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>STT</th>
								<th>Nhóm</th>
								<th class="pl-5">Action</th>
							</tr>
						</thead>
						<tbody id="data">
							@if(!empty($groupUser))
							@foreach($groupUser as $groupUser)
							@if(!empty($groupUser->id))
							<td>{{$groupUser->id}}</td>
							@else
							<td></td>
							@endif

							@if(!empty($groupUser->name))

							<td>{{$groupUser->name}}
								(<span style="color: red">
									{{!empty($groupUser->users)?$groupUser->users->count():'0'}}
								</span>	)
							</td>
							@else
							<td></td>
							@endif

							<td>
								<a title="xem chi tiết" href="{{route('show-user',$groupUser->id)}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
								<a title="sửa quyền" href="{{route('edit-role',$groupUser->id)}}"><button class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></button></a>
								<a title="xóa" onclick="return confirm('bạn có chắc muốn xóa quyền này k')" href="{{route('destroy-role',$groupUser->id)}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
							</td>  
							
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection


