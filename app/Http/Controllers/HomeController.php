<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Product;
use App\Category;
use App\ProductDetail;
use App\Image;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
	public function index()
    {
        
        $categories=Category::where('parent_id','<>','0')->get();
        $products_hot=Product::where('pro_hot','0')->get();
        $products=Product::where('pro_hot','<>','0')->paginate(6);
        $prodels=ProductDetail::all();

        return view('customer.product.list-product',compact('categories','products','prodels','products_hot'));
    }
    public function show($id)
    {
        $product=Product::find($id);
        $product_del=ProductDetail::where('product_id',$id)->first();
        $image=Image::where('product_id',$id)->first();
        $comments=Comment::where('product_id',$id)->get();
        return view('customer.product.product-detail',compact('product','product_del','image','comments'));
    }
    public function show_product_by_category($id)
    {
        $products=Product::where('category_id',$id)->get();
         $product_del=ProductDetail::where('product_id',$id)->first();
        return view('customer.product.listpro_by_cate',compact('products','product_del'));
    }
    public function register()
    {
        return view('customer.user.register');
    }
    public function postRegister(Request $request)
    {
       $request->except('_token');
       $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'gender'=>$request->gender,
            'phone'=>$request->phone,
            'address'=>$request->address
        ];
        $user = User::create($data);
        if($user)
        {
           
            return redirect()->route('home');
        }
        return redirect()->back()->with('fail', 'Register fail');


    }
    public function login()
    {
        return view('customer.user.register');
    }
    public function postLogin(Request $request)
    {
        $request->except('_token');
       $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required'
            ],
            [
                'email.required'=>'Bạn chưa nhập Email',
                'password.required'=>'Bạn chưa nhập password',
            ]
        );
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {         
            // $id=Auth::id();
            // dd($id);
            // $id=Auth::id();
            // $user= User::find($id);
            return redirect()->route('home')->with('mess','thatbai');
            
        }
        else{
            return redirect()->route('login')->with('mess','thatbai');
        }
    }


    public function getLoginAdmin()
    {
        return view('admin.login');
    }
    public function postLoginAdmin(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required'
            ],
            [
                'email.required'=>'Bạn chưa nhập Email',
                'password.required'=>'Bạn chưa nhập password',
            ]
        );
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {         
            // $id=Auth::id();
            // dd($id);
            $id=Auth::id();
            $user= User::find($id);
            return view('admin.layouts.master',compact('user'));
            
        }
        else{
            return redirect()->route('getlogin')->with('mess','thatbai');
        }
    }
}
