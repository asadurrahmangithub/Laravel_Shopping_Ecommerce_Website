<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use DB;
use Cart;
class CheckoutController extends Controller
{
    public function checkout(){
        $footerPros = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.*', 'categories.category_name','sub_categories.sub_category_name')
            ->take(2)->get();
        return view('frontEnd.checkout.checkout',[
            'customer' => Customer::all(),
            'carts' => Cart::content(),
            'footerPros' => $footerPros,
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
        ]);

    }
}
