@extends('customer.layouts.master')
@section('content')

<div class="content">
        <div class="container">
            <div class="box sing-form">
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12 ">
                        <!-- form -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                                    <h3 class="mb10">Đăng kí tài khoản</h3>
                                    <p>Vui lòng điền vào chổ trống bên dưới  </p>
                                </div>
                                <form action="{{route('postRegister')}}" method="POST">
                                	@csrf
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">                                           
                                            	<span style="color:red">{{$errors->first('name')}}</span>

                                          
                                            <input id="name" name="name" type="text" class="form-control" placeholder="Nhập tên của bạn" {{old('name')}}>
                                        </div>
                                    </div>
                                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <select name="gender" id="">
                                            	<option value="1" selected>Nam</option>
												<option value="0">Nữ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                           
                                            	<span style="color:red">{{$errors->first('phone')}}</span>
                                           
                                            <input id="phone" name="phone" type="text" class="form-control" placeholder="Số diện thoại"  >
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            
                                            	<span style="color:red">{{$errors->first('email')}}</span>
                                           
                                            <input id="email" name="email" type="text" class="form-control" placeholder="Nhập địa chỉ email"  >
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                           
                                            	<span style="color:red">{{$errors->first('password')}}</span>
                                          
                                            <input id="password" name="password" type="password" class="form-control" placeholder="Mật khẩu" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea name="address" rows="5" class="form-control">
                                            	
                                            </textarea>
                                            <span style="color:red">{{$errors->first('address')}}</span>
                                        </div>
                                    </div>
                                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <button type="submit" class="btn btn-primary btn-block mb10">Đăng kí</button>
                                        
                                    </div>

                                   
                                </form>
                            </div>
                            <!-- /.form -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>





@endsection