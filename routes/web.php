<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', function () {
    return view('home_page');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/index', [FrontendController::class, 'index'])->name('home');
Route::get('/addproduct', [ProductController::class, 'addproduct'])->name('addproduct');
Route::get('/allproduct', [ProductController::class, 'allproduct'])->name('allproduct');
Route::get('/editproduct/{id}', [ProductController::class, 'editproduct'])->name('editproduct');
Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct'])->name('deleteproduct');
Route::post('/storeproduct', [ProductController::class, 'storeproduct'])->name('storeproduct');
Route::post('/updateproduct/{id}', [ProductController::class, 'updateproduct'])->name('updateproduct');

Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::get('/shop_grid', [FrontendController::class, 'shop_grid'])->name('shop_grid');
Route::get('/shop_details', [FrontendController::class, 'shop_details'])->name('shop_details');
Route::get('/blog_details', [FrontendController::class, 'blog_details'])->name('blog_details');
Route::get('/shopping_cart', [FrontendController::class, 'shopping_cart'])->name('shopping_cart');


require __DIR__.'/auth.php';
