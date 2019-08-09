<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\User;
use App\OrderDetail;
use Illuminate\Support\Facades\Auth;
use DB;
class OrderController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{

	$agree      = Order::where('status',1)->get();
	$disagree   = Order::where('status',0)->get();

	if($request->name)
	{
		$order  = Order::where('name','like','%'.$request->name.'%')->orWhere('phone','like','%'.$request->name.'%')->get();

		return view('admin.order.searchOrder',compact('order'));
	}

	return view('admin.order.index',compact('disagree','agree'));


}

public function show($id)
{
	$order      = Order::with('orderDetails','orderDetails.product')->where('id',$id)->first();
	
	return view('admin.order.showOrderDetail',compact('order'));

}


public function destroy($id)
{
	try {
		DB::beginTransaction();

		$order    = Order::find($id);
		OrderDetail::where('order_id',$id)->delete();
		$order->delete();

		DB::commit();

		return redirect()->back();

	} catch (Exception $e) 
	{

		return redirect()->back();

	}
}

//show ra đơn hàng đẵ đã duyệt
public function getAgree(){

	$agree      = Order::where('status',1)->get();
	$user       = User::all();

	return view('admin.order.orderAgree',compact('agree','user'));
}

public function getDisAgree(){
	$disAgree   = Order::where('status',0)->get();
	return view('admin.order.orderDisAgree',compact('disAgree'));
}

public function browseOrder($id)
{
	$orderAgree          = Order::find($id);
	$orderAgree->status  = $orderAgree->status ? 0 : 1;
	$orderAgree->user_id =  $orderAgree->user_id? 0 : Auth::id();
	$orderAgree->save();
	return redirect()->back();
}

public function showHistoryOrder()
{
	$orderHistory        = Order::onlyTrashed()->get();

	return view('admin.order.historyOrder',compact('orderHistory'));

}

public function showHistoryOrderDetail($id)
{
	$orderHistoryDetail  = OrderDetail::onlyTrashed()->where('order_id',$id)->get();

	return view('admin.order.showHistoryOrderDetail',compact('orderHistoryDetail'));

}

public function restore($id){
	try {
		DB::beginTransaction();

		$order           = Order::find($id);
		OrderDetail::onlyTrashed()->where('order_id',$id)->restore();
		Order::onlyTrashed()->find($id)->restore();

		DB::commit();

		return redirect()->back();

	} catch (Exception $e) {

		return redirect()->back();

	}
}

public function forceDelete($id)
{
	try {
		DB::beginTransaction();

		$order = Order::find($id);
		OrderDetail::onlyTrashed()->where('order_id',$id)->forceDelete();
		Order::onlyTrashed()->find($id)->forceDelete();

		DB::commit();

		return redirect()->back();

	} catch (Exception $e)
	{

		return redirect()->back();

	}
}


public function deleteOrderDetail($id)
{
	OrderDetail::find($id)->delete();
	return redirect()->back();

}


}