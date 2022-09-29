<?php

// namespace App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProjectController;

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

Route::get('/', function () {
    return view('home');
});

// Route::get('/about', function () {
//     return view('allproducts');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['admin','auth']], function(){
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('/users',[AdminController::class,'users'])->name('admin.users');
    Route::get('/edit/{id}',[AdminController::class,'edit'])->name('admin.edit');  
    Route::delete('/role-delete/{id}',[AdminController::class,'destroy'])->name('admin.destroy');  
    Route::delete('/role-restore/{id}',[AdminController::class,'restore'])->name('admin.restore');  
    Route::put('/role-update/{id}',[AdminController::class, 'registerupdate'])->name('admin.registerupdate');
    Route::resource('/categories',CategoryController::class);
    Route::resource('/products',ProductController::class);
    Route::resource('/orders', OrderController::class);


    // Route::get('edit'[AdminController::class,'edit'])->name('admin.edit');

    Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
    Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');
    // Route::get('/', [AdminController::class, 'index'])->name('index');

});
Route::group(['prefix'=>'user', 'middleware'=>['user','auth']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('shipping',[UserController::class,'shipping'])->name('user.shipping');
    Route::get('order',[UserController::class,'order'])->name('user.order');


    Route::post('update-profile-info',[UserController::class,'updateInfo'])->name('userUpdateInfo');
    Route::post('change-profile-picture',[UserController::class,'updatePicture'])->name('userPictureUpdate');
    Route::post('change-password',[UserController::class,'changePassword'])->name('userChangePassword');
    
});

    // Page Sites Routes
   Route::controller(PageController::class)->group (function(){
    Route::get('/allproducts', 'index')->name('allproducts');
   });


require __DIR__.'/auth.php';
