<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Cart;
use DB;
class EcommerceController extends Controller
{
    public function index(){
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.*', 'categories.category_name','sub_categories.sub_category_name')
            ->where('product_area',1)
            ->get();
        $arrivals = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.*', 'categories.category_name','sub_categories.sub_category_name')
            ->where('product_area',2)
            ->get();
        $footerPros = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.*', 'categories.category_name','sub_categories.sub_category_name')
            ->take(2)->get();
        return view('frontEnd.home.home',[
            'products'=> $products,Product::where('status',1)->get(),
            'sliders'=> Slider::where('publication_status',1)->take(2)->get(),
            'footerPros' => $footerPros,
            'arrivals' => $arrivals,
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),

        ]);
    }
    public function shop(){
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.category_name')
            ->where('product_area',1)
            ->get();
        $footerPros = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.*', 'categories.category_name','sub_categories.sub_category_name')
            ->take(2)->get();
        return view('frontEnd.shop.shop',[
            'products'=> $products,Product::where('status',1)->get(),
            'footerPros' => $footerPros,
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
        ]);
    }
    public function productDetails(){
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.category_name')
            ->get();
        $footerPros = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.*', 'categories.category_name','sub_categories.sub_category_name')
            ->take(2)->get();
        return view('frontEnd.product-details.product-details',[
            'products'=> $products,Product::where('status',1)->get(),
            'footerPros' => $footerPros,
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
        ]);
    }
    public function cart(){
        $footerPros = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.*', 'categories.category_name','sub_categories.sub_category_name')
            ->take(2)->get();
        return view('frontEnd.cart.cart',[
            'carts' => Cart::content(),
            'footerPros' => $footerPros,
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
        ]);
    }


}
