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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/', [HomeController::class, 'index'])->name('home');

//Wheels Site
Route::controller(HomeController::class)->group(function(){
    Route::get('/cyclingevent', 'cycle')->name('cyclingevent');
    Route::get('/allproducts', 'index')->name('allproducts');
    Route::get('/bikefitting', 'fitting')->name('bikefitting');

    Route::get('/', 'featuredSection')->name('home');
    Route::get('/shop', 'listProducts')->name('shop');
    Route::get('/product/{slug}','singleProduct')->name('product');
    // Search and Filter
    Route::get('/search', 'search')->name('search');
    Route::get('/shop/{id}', 'filter')->name('filter');

    // Route::post('/shop/{id}', 'filter')->name('filter');
});
//Admin Routes
Route::group(['prefix'=>'admin', 'middleware'=>['admin','auth']], function(){
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('/users',[AdminController::class,'users'])->name('admin.users');
    Route::get('/edit/{id}',[AdminController::class,'edit'])->name('admin.edit');  
    Route::delete('/role-delete/{id}',[AdminController::class,'destroy'])->name('admin.destroy');  
    // Route::post('/role-restore/{id}',[AdminController::class,'restore'])->name('admin.restore');  
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
    // Route::get('/cycling-event', 'cycle')->name('cycling-event');
    // Route::get('/bike-fitting', 'fitting')->name('bike-fitting');
   

   });


require __DIR__.'/auth.php';
