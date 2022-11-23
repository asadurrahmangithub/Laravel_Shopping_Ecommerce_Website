<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Cart;
use Illuminate\Http\Request;
use DB;

class CartController extends Controller
{
    public function addCart(Request $request){
        $product=Product::find($request->product_id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'qty' => 1,
            'image'=>$product->image,
            'weight' => 550,
        ]);
        return redirect('/show-cart');
    }
    public function showCart(){
        $footerPros = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.*', 'categories.category_name','sub_categories.sub_category_name')
            ->take(2)->get();
        return view('frontEnd.cart.cart',[
            'carts' => Cart::content(),
            'cart' => Cart::content(),
            'footerPros' => $footerPros,
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
        ]);
    }
    public function updateCart(Request $request){
        Cart::update(
            $request->rowId,
            $request->qty
        );
        return back();
    }
    public function deleteCart($id){
        Cart::remove($id);
        return back();
    }
}
