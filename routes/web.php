<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\BrandController;
use App\Models\Product;
use App\Models\Brand;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/admin', function(){
//     return view('admin/dashboard');
// });

// Route::get('/index2', function(){
//     return view('admin/index2');
// });

// Route::resource('/', UsersController::class);

// Route::get('/', [UsersController::class, 'index']);



Route::resource('/product', UsersController::class);
// Route::post('/product/create', [UsersController::class, 'store']);

Route::resource('/brand', BrandController::class);

Route::get('/brand/create', function(){
    return view('layout/brandAdd');
});

Route::get('/product/{product}/{brandID}/edit', [UsersController::class, 'edit'])->name('product.edit');
Route::get('/product/{product}/destroy', [UsersController::class, 'destroy'])->name('product.destroy');
Route::get('/brand/{brand}/destroy', [BrandController::class, 'destroy'])->name('brand.destroy');
Route::get('/product/{product}/profile', [UsersController::class, 'profile'])->name('product.profile');
Route::get('/brand/{brand}/profile', [BrandController::class, 'profile'])->name('brand.profile');
Route::get('/artinsta', function(){
    $product = Product::all();
    $data = compact('product');
    return view('layout/artinsta')->with($data);
});
Route::get('artinsta/{id}/product', function($id){
    $product = Product::find($id);
    $data = compact('product');
    return view('layout/artinstaProduct-view')->with($data);
});
