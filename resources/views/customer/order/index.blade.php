@extends('customer.layouts.master')
@section('content')

<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="box checkout-form">
					<!-- checkout - form -->
					<div class="box-head">
						<h2 class="head-title">Thông tin người đặt</h2>
					</div>
					<div class="box-body">
						@if(count(\Cart::content())!=0)
						<div class="row">
							<form action="{{route('addorder')}}" method="POST" role="form">
								@csrf
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">                              
										<input name="name" type="text" class="form-control" placeholder="Tên người nhận" value="{{(Auth::check())? Auth::user()->name :''}}">
										<span style="color:red">{{$errors->first('name')}}</span>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">                              
										<input name="email" type="email" class="form-control" placeholder="Email" value="{{(Auth::check())? Auth::user()->email :''}}">
										<span style="color:red">{{$errors->first('email')}}</span>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">                              
										<input name="phone" type="number" class="form-control" placeholder="Số điện thoại"value="{{(Auth::check())?Auth::user()->phone :''}}">
										<span style="color:red">{{$errors->first('phone')}}</span>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">                              
										<textarea class="form-control" name="address" rows="5" placeholder="Địa chỉ">{{(Auth::check())? Auth::user()->address :''}}</textarea>
										<span style="color:red">{{$errors->first('address')}}</span>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">                              
										<textarea class="form-control" name="note" rows="4" placeholder="Ghi chú khi giao hàng"></textarea>
										<span style="color:red">{{$errors->first('note')}}</span>
									</div>
								</div>                               
								<button class="btn btn-primary"> Xác nhận đặt hàng</button>
							</form>
						</div>
						@else
						<div class="row">
							<p class="alert-warning">Bạn không có sản phẩm nào</p>
						</div>
						@endif

						<!-- /.checkout-form -->
					</div>
				</div>
			</div>
	
		<!-- product total -->
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="box mb30">
				<div class="box-head">
					<h3 class="head-title">Giỏ hàng</h3>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<!-- product total -->

						<div class="pay-amount ">
							<table class="table mb20">
								<thead class="" style="border-bottom: 1px solid #e8ecf0;  text-transform: uppercase;">
									<tr>
										<th>
											<span>Tên sản phẩm</span></th>
											<th>
												<span>Thành tiền</span></th>
											</tr>
										</thead>
										<tbody>
											@foreach(\Cart::content() as $item)
											<tr>
												<th>
													<span>{{$item->name}}</span></th>
													<td>{{number_format($item->price)}} VND</td>
												</tr>
												@endforeach
											</tbody>
											<tbody>
												<tr>
													<th>
														<span>Tổng thanh toán</span></th>
														<td>{{\Cart::subtotal()}}VND</td>
													</tr>
												</tbody>
											</table>
										</div>
										<!-- /.product total -->
									</div>
								</div>
			</div>
							
		</div>
	</div>
	</div>
</div>
			


			
			@endsection