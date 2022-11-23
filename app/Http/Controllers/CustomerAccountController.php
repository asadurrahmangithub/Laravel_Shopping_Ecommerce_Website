<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Hash;
use Session;
use DB;

class CustomerAccountController extends Controller
{
    public function registerAccount(){
        $footerPros = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.*', 'categories.category_name','sub_categories.sub_category_name')
            ->take(2)->get();
        return view('frontEnd.account.register-account',[
            'footerPros' => $footerPros,
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
        ]);
    }
    public function loginAccount(){
        $footerPros = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.*', 'categories.category_name','sub_categories.sub_category_name')
            ->take(2)->get();
        return view('frontEnd.account.login-account',[
            'footerPros' => $footerPros,
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
        ]);
    }
    public function saveRegister(Request $request){
        $customer = new Customer();
        $customer ->name = $request->name;
        $customer ->phone = $request->phone;
        $customer ->address = $request->address;
        $customer ->email = $request->email;
        $customer ->password = $request->password;
        $customer->save();
        return back();
    }
    public function checkLogin(Request $request){
        $customerInfo = Customer::where('email', $request->user_name)
            ->orWhere('phone', $request->user_name)
            ->first();
        if ($customerInfo){
            if (Hash::check('password', bcrypt('password'))){
                Session::put('customerId',$customerInfo->id);
                Session::put('customerName',$customerInfo->name);
                Session::put('customerPhone',$customerInfo->phone);
                Session::put('customerAddress',$customerInfo->address);
                Session::put('customerEmail',$customerInfo->email);
                return redirect('/');
            }else{
                return back()->with('message','Please use valid password');
            }
        }else{
            return back()->with('message','Please use valid phone number or email');
        }
    }
    public function customerLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        return back();
    }
}
