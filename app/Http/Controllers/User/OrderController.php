<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Order;
use App\OrderDetail;
use App\ProductDetail;
use Cart;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('admin.order.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function getorder()
    {
        return view('customer.order.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
          $data_order = $request->except('_token');
        $data_order=[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'note'=>$request->note,
            'status'=>0,//trang thai dang cho xu li
            'user_id'=>0
        ];
        $order=Order::create($data_order);
        $carts= Cart::content();
        foreach ($carts as $cart) {
            $data_detail=[
                'quantity'=>$cart->qty,
                'price'=>$cart->price,
                'order_id'=>$order->id,
                'product_id'=>$cart->id
            ];
            $order_detail=OrderDetail::create($data_detail);
            $product = ProductDetail::where('product_id',$cart->id)->first();
            if ($product->quantity < $cart->qty)
            {
                $order->delete();
                return redirect()->route('getCart')->with('error', 'Số lượng không đủ');
            }
        }
        foreach ($carts as $cart) {
            $product = ProductDetail::where('product_id',$cart->id)->first();
            $product->quantity = $product->quantity - $cart->qty;
            $product->save();
        }
        Cart::destroy();
        return redirect()->route('home');
    }
    public function view_order(Request $request)
    {
        // \DB::enableQueryLog();
        $order= Order::with('orderDetails','orderDetails.product.productDetail')->where('email',\Auth::user()->email)->get();
        // dd(\DB::getQueryLog());
        // dd($order);
        // $order_detail=OrderDetail::where('order_id',$order->id)->get();
        return view('customer.order.view_order_detail',compact('order'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
