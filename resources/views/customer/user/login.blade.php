
@extends('customer.layouts.master')
@section('content')
<div class="content">
        <div class="container">
            <div class="box">
                
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                                    <h3 class="mb10">Đăng nhập</h3>
                                    @if(session('message'))
                                    <div class="alert-warning">{{session('message')}}</div>
                                    @endif
                                </div>
                                <!-- form -->
                                <form action="{{route('postLoginuser')}}" method="POST">
                                	@csrf
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="email"></label>
                                            <div class="login-input">
                                                <input id="email" name="email" type="text" class="form-control" placeholder="Nhập địa chỉ email" {{old('name')}}  >
                                                <div class="login-icon"><i class="fa fa-user"></i></div>
                                                <span style="color:red">{{$errors->first('email')}}</span><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only"></label>
                                            <div class="login-input">
                                                <input name="password" type="password" class="form-control" placeholder="******"  >
                                                <div class="login-icon"><i class="fa fa-lock"></i></div>
                                                <div class="eye-icon"><i class="fa fa-eye"></i></div>
                                                <span style="color:red">{{$errors->first('password')}}</span><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20 ">
                                        <button type="submit" class="btn btn-primary btn-block mb10">Đăng nhập</button>
                                        
                                    </div>
                                </form>

                              
                                    <!-- /.form -->
                            </div>
                        </div>
                    </div>
                       <!-- features -->
                  
                    <!-- /.features -->
                </div>
            </div>
        </div>
    </div>

@endsection