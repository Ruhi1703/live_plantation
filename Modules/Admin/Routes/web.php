<?php

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
use Modules\Admin\Http\Controllers\AdminController;

Route::prefix('admin')->group(function() {
    Route::get('/dashboard', [AdminController::class,'index'])->name('/dashboard');
    Route::get('profile',function(){
        if(Auth::check())
        {
            return view('admin::profile');
        }
        else{
            return redirect('admin_login');
        }
    })->name('profile');
    Route::get('image',function(){
        if(Auth::check())
        {
            return view('admin::Upload_img');
        }
        else{
            return redirect('admin_login');
        }
    })->name('image');
    Route::get('message', [AdminController::class, 'user_msg'])->name('users.index');
    Route::any('upload', [AdminController::class, 'upload'])->name('upload');
    Route::any('update_profile', [AdminController::class, 'update_profile'])->name('update_profile');
    Route::any('list_img', function(){
        return view('admin::list_img');
    })->name('list_img');
    Route::any('get_img', [AdminController::class, 'get_img'])->name('get_img');
    Route::any('delete_img', [AdminController::class, 'delete_img'])->name('delete_img');

});