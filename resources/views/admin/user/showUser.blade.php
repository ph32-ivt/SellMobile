@extends('admin.layouts.master')
@section('content')
<div class="container">
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						<h5 class="card-title">Quản trị user</h5>
					</div>
					<div class="col-md-2">
						<button class="mb-2 btn btn-primary"><a href="{{route('create-user')}}">Thêm mới</a></button>			
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
						<tbody id="data">
							@if(!empty($users))
							@foreach($users as $user)
							@if(!empty($user->id))
							<td>{{$user->id}}</td>
							@else
							<td></td>
							@endif
														
							@if(!empty($user->name))
							<td>{{$user->name}}</td>
							@else
							<td></td>
							@endif

							@if(!empty($user->gender))
							<td>{{$user->getGender($user->gender)['name']}}</td>
							@else
							<td></td>
							@endif

							@if(!empty($user->email))
							<td>{{$user->email}}</td>
							@else
							<td></td>
							@endif

							@if(!empty($user->phone))
							<td>{{$user->phone}}</td>
							@else
							<td></td>
							@endif

							@if(!empty($user->address))
							<td>{{$user->address}}</td>
							@else
							<td></td>
							@endif
								<td>
									<a href="{{route('show-user',$user->id)}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
									<a href="#"><button class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></button></a>
									<a href=""><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
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


