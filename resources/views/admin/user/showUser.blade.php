@extends('admin.layouts.master')
@section('content')
@if(session('sussecc'))
	<div class="alert alert-info">
		{{session('sussecc')}}
	</div>
@endif

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('index-user')}}">User</a></li>
		<li class="breadcrumb-item active" aria-current="page">Admin</li>
	</ol>
</nav>

<div class="container">
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						<h5 class="card-title">Quản trị user</h5>
					</div>

				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>STT</th>
								<th>Tên User</th>
								<th>Giới tính</th>
								<th>Email</th>
								<th>Số Điện thoại</th>
								<th>Địa chỉ</th>
								<th class="pl-5">Action</th>
							</tr>
						</thead>

						@php
							$stt = 1;
						@endphp
						<tbody id="data">
							@if(!empty($listUser[0]['users']))
							@foreach($listUser[0]['users'] as $user)
							@if(!empty($user['id']))
							<td>{{$stt++}}</td>
							@else
							<td></td>
							@endif
														

							@if(!empty($user['name']))
							<td>{{$user['name']}}</td>
							@else
							<td></td>
							@endif


							<td>{{!empty($user['gender']) == 1 ? 'Nam':'Nữ' }}</td>

							@if(!empty($user['email']))
							<td>{{$user['email']}}</td>
							@else
							<td></td>
							@endif


							@if(!empty($user['phone']))
							<td>{{$user['phone']}}</td>
							@else
							<td></td>
							@endif


							@if(!empty($user['address']))
							<td>{{$user['address']}}</td>
							@else
							<td></td>
							@endif
							@php
								$role = \DB::table('user_roles')->where('user_id',\Auth::user()->id)->first();
							@endphp
							
								<td>
									@if(\Auth::user()->id == $user['id'] || $role->role_id==1)
									<a title="Sửa user" href="{{route('edit-user',$user['id'])}}"><button class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></button></a>
									@endif
									<a href="{{route('delete-user',$user['id'])}}"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
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
</div>

@endsection


