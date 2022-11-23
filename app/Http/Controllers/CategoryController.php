<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        return view('admin.category.category',[
            'categories' => Category::all(),
        ]);
    }
    public function saveCategory(Request $request){
        $category = new Category();
        $category ->category_name = $request->category_name;
        $category->save();
        return back();

    }
    public function statusCategory($id){

        $category = Category::find($id);
        if ($category->status==1){
            $category->status=0;
            $category->save();
            return back();
        }
        else{
            $category->status=1;
            $category->save();
            return back();
        }

    }
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return back();
    }
    public function editCategory($id){
        return view('admin.category.edit-category',[
            'category' =>Category::find($id),

        ]);

    }
    public function updateCategory(Request $request){

        $category = Category::find($request->id);
        $category ->category_name = $request->category_name;
        $category->save();
        return redirect('/category');

    }
}
