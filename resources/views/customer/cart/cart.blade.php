@extends('customer.layouts.master')
@section('content')
@if(session('error'))
    <script type="text/javascript">
        alert('{{session('error')}}');
    </script>
    @endif
<div class="space-medium">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="box">
					<div class="box-head">
						<h3 class="head-title">Giỏ hàng ({{count(Cart::content())}})</h3>
					</div>
					<!-- cart-table-section -->
					<div class="box-body">
						<div class="table-responsive">
							<div class="cart">
								@if(count($cart))
								<table class="table table-bordered ">
									<thead>
										<tr>
											<th>
												<span>Tên sản phẩm</span></th>
												<th>
													<span>Đơn giá</span></th>
													<th >
														<span>Số lượng</span></th>
														
														<th colspan="2"><span>Cập nhật - Xóa</span>
														</th>

													</tr>
												</thead>
												<tbody>
													@foreach($cart as $item)
													<form method="POST" action="{{route('updateCart')}}">
														<tr>
															<td><a href="#"><img src="images/{{$item->options->img}}" alt=""></a>
																<span><a href="#">{{$item->name}}</a></span>
															</td>
															<td>{{number_format($item->price)}} VND</td>
															<td >
																<div class="product-quantity">
																	<div class="quantity">
																		<input class="quantity" type="number" name="quantity" value="{{$item->qty}}" style="width: 50px;">
																	</div>
																</div>
															</td>

															<th >
																<input type="hidden" name="rowId" value="{{$item->rowId}}">
																<input type="hidden" name="_token" value="{{ csrf_token() }}">
																<button type="submit" class="btn btn-info btn-sm" title="Update"><i class="fa fa-upload btn-info"></i></button>
															</th></form>
															<th scope="row">
																<form action="{{route('removeCart')}}" method="POST">
																	<input type="hidden" name="rowId" value="{{$item->rowId}}">
																	<input type="hidden" name="_token" value="{{ csrf_token() }}">
																	<button class="btn btn-danger btn-sm" href="" title="Xóa sản phẩm"><i class="fa fa-times-circle-o "></i></button></form>													



																</tr>													
																@endforeach
																<tr>
																	<td>Total</td>
																	<td>{{Cart::subtotal()}} VND</td>
																</tr>
															</tbody>
														</table>
														@else
														<p class="alert alert-info">Bạn không có sản phẩm nào trong giỏ hàng</p>
														@endif
													</div>
													<!-- /.cart-table-section -->
												</div>
											</div>
										</div>
										<a href="{{route('home')}}" class="btn-link"><i class="fa fa-angle-left"></i> Quay lại trang chủ</a>
									</div>
									<!-- cart-total -->
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="box mb30">
											<div class="box-head">
												<h3 class="head-title">Chi tiết</h3>
											</div>
											<div class="box-body">
												<div class=" table-responsive">
													<div class="pay-amount ">
														<table class="table mb20">
															<tbody>
																<tr>
																	<th>
																		<span>Giá tổng sản phẩm</span></th>
																		<td>{{Cart::subtotal()}} VND</td>
																	</tr>
																	<tr>
																		<th>
																			<span>VAT</span></th>
																			<td><strong class="text-green">Free</strong></td>
																		</tr>
																	</tbody>
																	<tbody>
																		<tr>
																			<th>
																				<span class="mb0" style="font-weight: 700;">Tổng cộng</span></th>
																				<td style="font-weight: 700; color: #1c1e1e; ">{{Cart::subtotal()}} VND</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<form action="{{route('getorder')}}" method="GET">			
																	<button class="btn btn-primary btn-block {{(count(\Cart::content()) == 0)?'hidden':'' }} " href="">Đặt hàng</button>
																</form>	
															</button>
														</div>
													</div>
												</div>

											</div>
										</div>
										<!-- /.cart-total -->
									</div>
								</div>

								@endsection