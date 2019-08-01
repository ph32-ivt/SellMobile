@extends('customer.layouts.master')
@section('content')
 <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="box">
                        <div class="box-head">
                            <h2 class="head-title">Contact Us</h2>
                        </div>
                        <div class="box-body contact-form">
                            <div class="row">
                                <form action="{{route('send-contact')}}" method="POST" role="form">
                                	@csrf
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="name"></label>
                                            <input name="name" id="name" type="text" placeholder="Your  Name" class="form-control" required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="email"></label>
                                            <input name="email" id="email" type="text" placeholder="Enter Email Address" class="form-control" required>
                                        </div>
                                    </div>
                                  
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="textarea"></label>
                                            <textarea class="form-control" id="textarea" name="content" rows="4" placeholder="Messages"></textarea>
                                        </div>
                                        <button type="submit" name="singlebutton" class="btn btn-primary">submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                      <!-- /.contact-form -->
                            <!-- address-block -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="box">
                        <div class="box-head">
                            <h2 class="head-title">Contact Info</h2>
                        </div>
                        <div class="box-body">
                            
                            <div class="contact-block">
                                <h4>Nguyễn Minh Hải </h4>
                                <p class="mb0">Toll Free: <span class="text-default">0905004678</span></p>
                                <p class="mb0">Email: <span class="text-default">nm.hai@gmail.com</span></p>
                            </div>
                            <div class="contact-block">
                                <h4>Nguyễn Hoàng Kha</h4>
                                <p class="mb0">Phone: <span class="text-default">0324156789</span></p>
                                <p class="mb0">Email: <span class="text-default">hoangkha@gmail.com</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.address-block -->
            </div>
         
        </div>
    </div>

@endsection