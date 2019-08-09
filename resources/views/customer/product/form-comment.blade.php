<div id="review">
   <div class="row form-comment">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="box">
            <div class="box-head">
<<<<<<< HEAD
               <h3 class="head-title">Add A Reviews</h3>
=======
               <h3 class="head-title">Thêm nhận xét của bạn</h3>
>>>>>>> a6b2954e0b073c5d2fde4ba899986d8b21732a13
            </div>
            <div class="box-body">
               <div class="row">
                  <div class="review-form">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-rating">
<<<<<<< HEAD
                           <h5>Your Rating : &nbsp;</h5>
                           <div class="star-rate" id="rateYo"></div>
=======
                           
>>>>>>> a6b2954e0b073c5d2fde4ba899986d8b21732a13
                        </div>
                     </div>
                     <form action="{{route('createcmt')}}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group">
                              <label class="control-label sr-only " for="name"></label>
<<<<<<< HEAD
                              <input id="name" type="text" class="form-control" placeholder="Name"  name="name">
=======
                              <input id="name" type="text" class="form-control" placeholder="Nhập tên"  name="name">
>>>>>>> a6b2954e0b073c5d2fde4ba899986d8b21732a13
                              <span style="color: red">{{$errors->first('name')}}</span>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group">
                              <label class="control-label sr-only " for="email"></label>
<<<<<<< HEAD
                              <input id="email" type="text" class="form-control" placeholder="Email"  title="email" name="email">
=======
                              <input id="email" type="text" class="form-control" placeholder="Nhập email"  title="email" name="email">
>>>>>>> a6b2954e0b073c5d2fde4ba899986d8b21732a13
                              <span style="color: red">{{$errors->first('email')}}</span>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <label class="control-label sr-only " for="name"></label>
<<<<<<< HEAD
                              <input id="title" type="text"  class="form-control" placeholder="Title"  name="title">
=======
                              <input id="title" type="text"  class="form-control" placeholder="Tiêu đề"  name="title">
>>>>>>> a6b2954e0b073c5d2fde4ba899986d8b21732a13
                              <span style="color: red">{{$errors->first('title')}}</span>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                           <div class="form-group">
                              <label class="control-label sr-only " for="textarea"></label>
<<<<<<< HEAD
                              <textarea class="form-control" id="textarea" name="content" rows="4" placeholder="Enter your Reviews"></textarea>
                              <span style="color: red">{{$errors->first('content')}}</span>
                           </div>
                           <button id="submit" name="singlebutton" class="btn btn-primary">Submit</button>
=======
                              <textarea class="form-control" id="textarea" name="content" rows="4" placeholder="Nội dung"></textarea>
                              <span style="color: red">{{$errors->first('content')}}</span>
                           </div>
                           <button id="submit" name="singlebutton" class="btn btn-primary">Hoàn thành</button>
>>>>>>> a6b2954e0b073c5d2fde4ba899986d8b21732a13
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>