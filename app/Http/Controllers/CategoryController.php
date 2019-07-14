<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
	public function index(){
		$category = Category::all();	
		return view('admin.category.category',compact('category'));
	}

	public function getDataCategory(){
		$category = Category::all();	
		return view('admin.category.dataCategory',compact('category'));
	}
	public function formCategory(){
		return view('admin.category.formCategory');
	}
	public function createCategory(Request $request){
		$category = new Category();
		$category->parent_id = $request->parent;
		$category->name = $request->name;
		$category->cate_slug = str_slug($category->name);
		$category->save();
		return 'true';
	}
}
