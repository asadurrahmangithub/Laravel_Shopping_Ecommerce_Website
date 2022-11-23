<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        return view('admin.product.product',[
            'categories' => Category::all(),
            'SubCategories' => SubCategory::all(),
            'brands' => Brand::all(),
        ]);
    }
    public function saveProduct(Request $request){
        $product = new Product();
        $product ->category_id = $request->category_id;
        $product ->sub_category_id = $request->sub_category_id;
        $product ->brand_id = $request->brand_id;
        $product ->product_name = $request->product_name;
        $product ->product_code = $request->product_code;
        $product ->product_price = $request->product_price;
        $product ->discount_amount = $request->discount_amount;
        $product ->discount_price = $request->discount_price;
        $product ->product_description = $request->product_description;
        $product ->product_made = $request->product_made;
        $product ->stock_amount = $request->stock_amount;
        $product ->product_cost = $request->product_cost;
        $product ->product_area = $request->product_area;
        $product->image = $this->image($request);
        $product->image1 = $this->image1($request);
        $product->save();
        return back();
    }
    private function image(Request $request){
        $image = $request->file('image');
        $imageName = 'product'.'-'.rand().'.'.$image->extension();
        $directory = 'admin/custom-image/product-image/';
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;
    }
    private function image1(Request $request){
        $image1 = $request->file('image1');
        $imageName = 'product'.'-'.rand().'.'.$image1->extension();
        $directory = 'admin/custom-image/product-image1/';
        $imageUrl = $directory.$imageName;
        $image1->move($directory,$imageName);
        return $imageUrl;
    }

}
