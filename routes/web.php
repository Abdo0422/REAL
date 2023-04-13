<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/view_categories',[CategoryController::class,'view_categories']);
Route::post('/add_category',[CategoryController::class,'add_category']);
Route::get('/delete_category/{id}',[CategoryController::class,'delete_category']);
Route::get('/view_product',[ProductController::class,'add_product'])->name('admin.add_product');
Route::post("/add_product",[ProductController::class,"add_product_db"]);
Route::get('/show_product',[ProductController::class,'show_product'])->name('admin.show_product');
Route::get('/show__product/{id}',[ProductController::class,'show__product']);
Route::get('/delete_product/{id}',[ProductController::class,'delete_product']);
Route::get('/edit_product/{id}',[ProductController::class,'edit_product']);
Route::post('/edit_product_confirm/{id}',[ProductController::class,'edit_product_confirm']);
Route::get('/product_details/{id}',[HomeController::class,'product_details']);
Route::get('/view_orders',[OrderController::class,'view_orders']);
Route::get('/delete_order/{id}',[OrderController::class,'delete_order']);
Route::get('/edit_order/{id}',[OrderController::class,'edit_order']);
Route::post('/edit_order_confirm/{id}',[OrderController::class,'edit_order_confirm']);
Route::get('/show_your_order',[OrderController::class,'show_your_order']);
Route::get('/search_product',[HomeController::class,'search_product']);
Route::get('/', function () {
    return view('index');
});


require __DIR__.'/auth.php';
