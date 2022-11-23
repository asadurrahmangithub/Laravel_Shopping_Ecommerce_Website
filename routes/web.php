<?php
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerAccountController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(EcommerceController::class)->group(function () {
    Route::get('/', 'index')->name('/');
    Route::get('/shop', 'shop')->name('/shop');
    Route::get('/product-details', 'productDetails')->name('/product-details');
    Route::get('/cart', 'cart')->name('/cart');
});

Route::controller(CustomerAccountController::class)->group(function () {
    Route::get('/register-account', 'registerAccount')->name('/register-account');
    Route::post('/save-register', 'saveRegister')->name('/save-register');
    Route::get('/login-account', 'loginAccount')->name('/login-account');
    Route::post('/check-login', 'checkLogin')->name('/check-login');
    Route::get('/customer-logout', 'customerLogout')->name('/customer-logout');
});
Route::controller(CartController::class)->group(function () {
    Route::post('/add-cart', 'addCart')->name('add-cart');
    Route::get('/show-cart', 'showCart')->name('show-cart');
    Route::post('/update-cart', 'updateCart')->name('update-cart');
    Route::get('/delete-cart/{id}', 'deleteCart')->name('delete-cart');
});
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('/checkout')->middleware('customer');



Auth::routes();

Route::group(['middleware'=>'disable_back_btn'],function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home','index')->name('home');
    });

    Route::controller(SliderController::class)->group(function () {
        Route::get('/slider', 'indexSlider')->name('slider');
        Route::post('/new-slider', 'save')->name('new-slider');
//    Route::get('/delete-slider/{id}', '/delete-slider/{id}')->name('delete-slider');
//    Route::get('/status-slider/{id}', 'statusSlider')->name('status-slider');
//    Route::get('/edit-slider/{id}', 'editSlider')->name('edit-slider');
//    Route::post('/update-slider', 'updateSlider')->name('update-slider');

    });
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'category')->name('category');
        Route::post('/new-category', 'saveCategory')->name('new-category');
        Route::get('/status-category/{id}', 'statusCategory')->name('status-category');
        Route::get('/delete-category/{id}', 'deleteCategory')->name('delete-category');
        Route::get('/edit-category/{id}', 'editCategory')->name('edit-category');
        Route::post('/update-category', 'updateCategory')->name('update-category');
    });

    Route::controller(BrandController::class)->group(function () {
        Route::get('/brand', 'brand')->name('brand');
        Route::post('/new-brand', 'saveBrand')->name('new-brand');
        Route::get('/status-brand/{id}', 'statusBrand')->name('status-brand');
        Route::get('/delete-brand/{id}', 'deleteBrand')->name('delete-brand');
        Route::get('/edit-brand/{id}', 'editBrand')->name('edit-brand');
        Route::post('/update-brand', 'updateBrand')->name('update-brand');
    });

    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/sub-category', 'index')->name('sub-category');
        Route::post('/new-sub-category', 'saveSubCategory')->name('new-sub-category');
        Route::get('/status-sub-category/{id}', 'statusSubCategory')->name('status-sub-category');
        Route::get('/delete-sub-category/{id}', 'deleteSubCategory')->name('delete-sub-category');
        Route::get('/edit-sub-category/{id}', 'editSubCategory')->name('edit-sub-category');
        Route::post('/update-sub-category', 'updateSubCategory')->name('update-sub-category');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/add-product', 'index')->name('add-product');
        Route::post('/new-product', 'saveProduct')->name('new-product');
    });
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin-logout', 'destroy')->name('admin-logout');
    });
});


