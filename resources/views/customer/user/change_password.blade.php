@extends('customer.layouts.master')
@section('content')

 <div class="container">
        <div class="row mt-2">

            
            <div class="col-md-9">
                <div class="content-right row  ml-0 p-0">
                    <h1 class="have-margin container mb-0 mt-3">Đổi mật khẩu</h1>
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
                                    </div>
                                @endif
                                <form action="{!! route('update_password',$user->id) !!}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label for="inputpassword" class="col-sm-3 col-form-label">Mật khẩu cũ</label>
                                        <div class="col-sm-9">
                                            <input type="password"
                                                   class="form-control "
                                                   id="inputpassword" name="current_password" required>
                                         
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputnewpassword" class="col-sm-3 col-form-label">Mật khẩu
                                            mới</label>
                                        <div class="col-sm-9">
                                            <input type="password"
                                                   class="form-control "
                                                   id="inputnewpassword" name="password" required>
                                            
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