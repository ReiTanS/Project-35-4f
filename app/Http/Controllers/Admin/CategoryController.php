<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Alert;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::Paginate(4);
        return view('admin.category.index',compact('category'));
    }
    public function create(){
        return view('admin.category.create');
    }
    public function insert(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อประเภทสินค้า',
            'name.unique' => 'ชื่อนี้มีอยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]
    );
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','');
        return redirect()->route('category.index');
    }
    public function edit($category_id){
    $category = Category::find($category_id);
    return view('admin.category.editform',compact('category'));

    }
    public function update(Request $request, $category_id){
        $validated = $request->validate([
            'name' => 'required|max:255',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อประเภทสินค้า',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]
    );
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->update();
        return redirect()->route('category.index');
     }
 
    public function delete($category_id){
       $category = Category::find($category_id);
       $category->delete();
       return redirect()->route('category.index');
    }

  
}
