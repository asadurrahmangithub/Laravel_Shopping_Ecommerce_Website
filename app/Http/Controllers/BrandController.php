<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brand(){
        return view('admin.brand.brand',[
            'brands' => Brand::all(),
        ]);
    }
    public function saveBrand(Request $request){
        $brand = new Brand();
        $brand ->brand_name = $request->brand_name;
        $brand->save();
        return back();

    }
    public function statusBrand($id){

        $brand = Brand::find($id);
        if ($brand->status==1){
            $brand->status=0;
            $brand->save();
            return back();
        }
        else{
            $brand->status=1;
            $brand->save();
            return back();
        }

    }
    public function deleteBrand($id){
        $brand = Brand::find($id);
        $brand->delete();
        return back();
    }
    public function editBrand($id){
        return view('admin.brand.edit-brand',[
            'brand' =>Brand::find($id),
        ]);

    }
    public function updateBrand(Request $request){

        $brand = Brand::find($request->id);
        $brand ->brand_name = $request->brand_name;
        $brand->save();
        return redirect('/brand');

    }
}
