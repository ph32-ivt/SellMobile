@extends('admin.layouts.master')
@section('content')
<div class="container">
   <div class="card-deck">
      <div class="card col-lg-12 px-0 mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-8">
                  <h1 class="card-title">Đơn Hàng</h1>
                  <a href="{{route('order-show-history')}}">lịch sử xóa</a>
               </div>
               <div class="col-md-4">
                  <form action="" >
                     <input type="text" placeholder="Tên khách hàng hoặc số điện thoại" name="name" value="{{\Request::get('name')}}">
                     <button class="btn btn-default"><i style="font-size: 25px" class="fas fa-search"></i></button>
                  </form>
               </div>
            </div>
            <div class="table-responsive">
               <table class="table center-aligned-table">
                  <thead>
                     <tr class="text-primary">
                        <th>Đơn hàng đã duyệt(<span style="color:red; font-weight: bold;font-size:14px">{{$agree->count()}}</span>)</th>
                        <td>
                           <a title="xem chi tiết" href="{{route('order-da-duyet')}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
                        </td>
                     </tr>
                     <tr class="text-primary">
                        <th>Đơn hàng chưa duyệt(<span style="color:red; font-weight: bold;font-size:14px">{{$disagree->count()}}</span>)</th>
                        <td>
                           <a title="xem chi tiết" href="{{route('order-disAgree')}}"><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
                        </td>
                     </tr>
                  </thead>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection