<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategroyRequest;

use DB;
class CategoryController extends Controller
{
	public function index()
	{	
		$category = Category::all();

		return view('admin.category.category',compact('category'));
	}
	public function create()
	{	
		$category = Category::all();
		return view('admin.category.formAddCategory',compact('category'));
	}

	public function show($id)
	{
		$category = Category::find($id);
		$data = $category->with('products')->where('id',$id)->first();
		  // dd($data);
		return view('admin.category.getByProductInCategry',compact('data'));
	}

	public function store(CategroyRequest $request)
	{
		$category = new Category();
		$category->name = $request->name;
		$category->cate_slug = $request->name;
		$category->save();
		return redirect()->route('index-category');
	}
	public function edit($id)
	{
		$category = Category::find($id);
		return view('admin.category.formEditCategory',compact('category'));
	}
	public function update(CategroyRequest $request,$id)
	{
		$category = Category::find($id);
		$category->name = $request->name;
		$category->cate_slug = $request->name;
		$category->update();
		return redirect()->route('index-category');
	}

	public function destroy($id)
	{
		Category::destroy($id);
		return redirect()->route('index-category');
	}

	public function history()
	{
		$category = Category::onlyTrashed()->get();
		return view('admin.history.category.historyCategory',compact('category'));
	}

	public function forceDelete($id)
	{
		Category::withTrashed()->find($id)->forceDelete();
		return redirect()->route('history-category');
	}
	
}
