<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Query\Builder;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Category;
use App\ProductDetail;
use App\OrderDetail;
use App\Comment;
use DB;
use File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    { 

        $products = Product::with('category','productDetail')->orderBy('id','DESC')->paginate(5);


     if($request->name) $products = Product::where('name' ,'like','%'.$request->name.'%')->paginate(5);

     return view('admin.product.index',compact('products'));

 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $category = Category::all();
      return view('admin.product.formAddProduct',compact('category'));
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data             = $request->except('_token');
        $data['pro_slug'] = str_slug($request->name);
        $data['pro_hot']  = $request->pro_hot ? $request->pro_hot :0;
        $data['status']   =$request->status ? $request->status : 0;

        if($request->hasFile('image'))
        {
            $file          = $request->file('image');
            $NameImage     = $file->getClientOriginalName();
            $NameImage     = str_random(4)."-".$NameImage;
            while(file_exists("/images/".$NameImage)){
                $NameImage = str_radom(4)."-".$NameImage;
            }
            $file->move(public_path('/images/'),$NameImage);
            $data['image'] = $NameImage;
        }else{
            $data['image'] = "";
        }

        $data              = Product::create($data);

        $dataDetail        = $request->only('cpu','memory', 'display', 'pin', 'sim', 'camera', 'option','quantity','price');
        $dataDetail['product_id'] = $data->id;
        $dataDetail        = ProductDetail::create($dataDetail);

        return redirect()->route('index-product')->with('sussecc','Thêm mới sản phẩm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('category','productDetail')->where('id',$id)->first();

        return view('admin.product.productDeteil',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $data = Product::with('productDetail','category')->where('id',$id)->first();

        return view('admin.product.formEditProduct',compact('data','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)

    {

     try {
        DB::beginTransaction();
        $product                 = Product::find($id);
        $dataProduct             = $request->except('_token');
        $dataProduct['pro_slug'] = str_slug($request->name);
        $dataProduct['pro_hot']  = $request->pro_hot ? $request->pro_hot :0;
        $dataProduct['status']   = $request->status ? $request->status : 0;

        if($request->hasFile('image'))
        {
            $file                = $request->file('image');
            $NameImage           = $file->getClientOriginalName();
            $NameImage           = str_random(4)."-".$NameImage;
            while(file_exists("/images/".$NameImage)){
                $NameImage       = str_radom(4)."-".$NameImage;
            }
            $file->move(public_path('/images/'),$NameImage);
            $dataProduct['image'] = $NameImage;
        }else{
            $dataProduct['image'] = $product->image;
        }
        $product->update($dataProduct);


        $dataDetail = $request->only('cpu','memory', 'display', 'pin', 'sim','camera','option','quantity','price');

        $productDetail = \DB::table('product_details')->where('product_id',$id)->update($dataDetail);
        DB::commit();
        return redirect()->route('index-product')->with('sussecc','Update Thành công');
    } catch (Exception $e) {
      return redirect()->back();
  }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
       try {
        DB::beginTransaction();
        $product = Product::find($id);

        if(!empty($product->image)){
            $image_path = public_path('/images/'.$product->image);
            if(File::exists($image_path)){
                File::delete($image_path);
            }
        }

        // File::delete(public_path('/images/'.$product->image));
        Comment::where('product_id',$id)->delete();
        ProductDetail::where('product_id',$id)->delete();
        $product->destroy($id);
        DB::commit();
        return redirect()->route('index-product')->with('sussecc','Bạn đã xóa thành công');
    } catch (Exception $e) {
      return redirect()->back();
  }
}

public function action($action,$id){
    if($action){
     $product = Product::find($id);
     switch ($action) {
        case 'status':
        $product->status  = $product->status ? 0 : 1;
        break;
        case 'pro_hot':
        $product->pro_hot = $product->pro_hot ? 0 : 1;
        break;
    }
    $product->save();
}
return redirect()->back();

}
}
