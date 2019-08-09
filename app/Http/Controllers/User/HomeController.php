<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests\UserRegister;
use App\Http\Requests\UserLoginRequest;

use App\User;
use App\Product;
use App\Category;
use App\ProductDetail;
use App\Image;
use App\Comment;
use App\UserRole;
use App\Slide;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
	public function index()
    {

        $categories=Category::all();

        $products_hot=Product::with('productDetail')->where('pro_hot','1')->where('status',1)->get();
        $products=Product::with('productDetail')->where('pro_hot','<>','1')->where('status',1)->paginate(8);


        // $products=Product::paginate(6);       
        $slides=Slide::where('status',1)->get();        
        return view('customer.product.list-product',compact('categories','products','products_hot','slides'));
    }
    public function show($id)
    {
        $product=Product::with('productDetail')->where('id',$id)->first();
        // $product_del=ProductDetail::where('product_id',$id)->first();
        // $image=Image::where('product_id',$id)->first();
        $comments=Comment::where('product_id',$id)->where('parent_id',NULl)->get();
        // dd($comments);
        return view('customer.product.product-detail',compact('product','comments'));
    }
    public function show_product_by_category($id)
    {
        $products=Product::with('productDetail')->where('category_id',$id)->paginate(8);
        // $products=Product::where('category_id',$id)->get();
         // $product_del=ProductDetail::where('product_id',$id)->get();
        return view('customer.product.listpro_by_cate',compact('products'));
    }
    public function register()
    {
        return view('customer.user.register');
    }
    public function postRegister(UserRegister $request)
    {
     $request->except('_token');
     $data=[
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'gender'=>$request->gender,
        'phone'=>$request->phone,
        'address'=>$request->address
    ];
    $user = User::create($data);

    return redirect()->route('userlogin');
        // return redirect()->back()->with('fail', 'Register fail');


}
public function login()
{
    return view('customer.user.login');
}
public function postLogin(UserLoginRequest $request)
{   
    $user=User::where('email',$request->email)->first(); 
    
    if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) 
    {         



        return redirect()->route('home')->with('success','Login successfull!');

    }
    else
    {

        return redirect()->route('login')->with('mess','thatbai');
    }
    
    return redirect()->route('userlogin')->with('message','Tên đăng nhập hoặc mật khẩu sai');

}


public function logout()
{
    Auth::logout();

    return redirect()->route('home')->with('success','Logout successfull!');
}




public function getLoginAdmin()
{
    return view('admin.login');
}
    // public function postLoginAdmin(Request $request)
    // {
    //     $this->validate($request,
    //         [
    //             'email'=>'required',
    //             'password'=>'required'
    //         ],
    //         [
    //             'email.required'=>'Bạn chưa nhập Email',
    //             'password.required'=>'Bạn chưa nhập password',
    //         ]
    //     );
    //     if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {         
    //         // $id=Auth::id();
    //         // dd($id);
    //         $id=Auth::id();
    //         $user= User::find($id);
    //         return view('admin.layouts.master',compact('user'));

    //     }
    //     else{
    //         return redirect()->route('getlogin')->with('mess','thatbai');
    //     }
    // }




public function profile_manage()
{
    $user=User::where('id',Auth::id())->first();

    return view('customer.user.profile_manage',compact('user'));
}
public function update_profile(Request $request,$id)
{
    $data = $request->only(['name','phone','address']);
    $user = User::where('id','=',$id)
    ->update($data);
    if (!$user>0){
        return redirect()->back()->with('error','Cập nhật thất bại!');
    }
    return redirect()->back()->with('successs','Cập nhật thành công!');
}
public function change_password()
{
    $user = \auth()->user();
    return view('customer.user.change_password',compact('user'));
}
public function update_change_password(Request $request, $id)
{
    if (!Hash::check($request->current_password,Auth::user()->password)) {
        return redirect()->back()->with('error','Mật khẩu cũ sai');
    }else{
        $user = User::where('id','=',$id)
        ->update([
            'password' => bcrypt($request->password),
        ]);
        return redirect()->back()->with('successs','Đổi mật khẩu thành công!');
    }

}
}
