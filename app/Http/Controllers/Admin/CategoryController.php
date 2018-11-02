<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.list' , compact('categories'))->with('panel_title','لیست دسته بندی ها');
    }

    public function create() {
        return view('admin.category.create')->with('panel_title','ایجاد دسته بندی جدید');
    }

    public function store( Request $request ) {

        $request->validate([
            'category_name' => 'required',
        ]);

        $new_category= Category::create([
            'category_name' => $request->input('category_name')
        ]);
        if($new_category){
            return redirect()->route('admin.categories.list')->with('success','دسته بندی جدید با موفقیت ایجاد شد.');
        }
    }

    public function edit( Request $request, $category_id ) {

        $catItem = Category::find($category_id);
        return view('admin.category.edit',compact('catItem'));
    }


    public function update( Request $request,$category_id ) {

        $request->validate([
            'category_name' => 'required',
        ]);

        $catItem = Category::find($category_id);
        $updateResult = $catItem->update([
            'category_name' => $request->input('category_name')
        ]);
        if($updateResult){
            return redirect()->route('admin.categories.list')->with('success','اطلاعات با موفقیت به روز رسانی شد');

        }
    }

    public function remove( Request $request, $category_id ) {
        $removeResult = Category::destroy([$category_id]);

        return redirect()->route('admin.categories.list')->with('success','عملیات با موفقیت انجام شد.');


    }
}
