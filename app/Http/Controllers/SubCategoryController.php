<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use DB;
class SubCategoryController extends Controller
{
    public function index(){
        $subCategories = DB::table('sub_categories')
            ->join('categories', 'sub_categories.category_id', '=', 'categories.id')
            ->select('sub_categories.*', 'categories.category_name')
            ->get();
        return view('admin.category.sub-category',[
            'categories' => Category::all(),
            'subCategories' => $subCategories,
        ]);
    }
    public function saveSubCategory(Request $request){
        $subCategory = new SubCategory();
        $subCategory ->category_id = $request->category_id;
        $subCategory ->sub_category_name = $request->sub_category_name;
        $subCategory->save();
        return back();
    }
    public function statusSubCategory($id){

        $subCategory = SubCategory::find($id);
        if ($subCategory->status==1){
            $subCategory->status=0;
            $subCategory->save();
            return back();
        }
        else{
            $subCategory->status=1;
            $subCategory->save();
            return back();
        }

    }
    public function deleteSubCategory($id){
        $subCategory = SubCategory::find($id);
        $subCategory->delete();
        return back();
    }
    public function editSubCategory($id){
        return view('admin.category.edit-sub-category',[
            'subCategory' =>SubCategory::find($id),
            'categories' => Category::all(),

        ]);

    }
    public function updateSubCategory(Request $request){

        $subCategory = SubCategory::find($request->id);
        $subCategory ->sub_category_name = $request->sub_category_name;
        $subCategory->save();
        return redirect('/sub-category');

    }
}
