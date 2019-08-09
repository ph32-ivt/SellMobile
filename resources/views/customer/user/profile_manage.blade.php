@extends('customer.layouts.master')
@section('content')
<div class="container">
        <div class="row mt-2">
            
            <div class="col-md-9">
                <div class="content-right row  ml-0 p-0">
                    <h1 class="have-margin container mb-0 mt-3">Thông tin tài khoản</h1>
                    <div class="container">
                        <div class="row">
                            <div class="card rounded col-md-10 m-3 p-4 ">
                                @if (session('successs'))
                                    <div class="alert alert-success " role="alert">
                                        {{ session('successs') }}
                                      
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger " role="alert">
                                        {{ session('error') }}
                                       >
                                    </div>
                                @endif
                                <form action="{{route('update_profile',Auth::id())}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label for="inputname3" class="col-sm-3 col-form-label">Họ tên</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                   class="form-control }"
                                                   id="inputname3" name="name" value="{{$user->name}}">
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtel3" class="col-sm-3 col-form-label">Số điện thoại</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                   class="form-control "
                                                   id="inputtel3" name="phone" value="0{{$user->phone}}">
                                            @if ($errors->has('tel'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('tel') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputEmail3"
                                                   value="{{$user->email}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputdd" class="col-sm-3 col-form-label">Địa chỉ</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                   class="form-control "
                                                   id="inputdd" name="address" value="{{$user->address}}">
                                            @if ($errors->has('address'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9 offset-3">
                                            <button type="submit" class="btn btn-primary py-2 px-4">Cập nhật</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection