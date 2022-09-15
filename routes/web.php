<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
    return view('welcome');
});
Route::get('admin_login', function () {
    if (Auth::check()) {
        return redirect('admin/dashboard');
    } else {
        return view('admin');
    }
})->name('admin_login');
Route::any('logout', [HomeController::class, 'logout'])->name('logout');
    Route::get('contact', function () {
        return view('./Home/contact');
    })->name('contact');
    Route::get('rev', function () { //ruhi
        return view('./Home/review');
    })->name('d');
    Route::get('d', function () { //ruhi
        return view('./Home/dummy');
    })->name('rev');
   
Route::get('about', function () {
    return view('./Home/aboutus');
})->name('about');
Route::get('more_about', function () {
    return view('./Home/more_about');
})->name('more_about');
Route::get('aloe', function () {
    return view('./Home/Products/aloe');
})->name('aloe');
Route::get('areca', function () {
    return view('./Home/Products/areca');
})->name('areca');
Route::get('rubber', function () {
    return view('./Home/Products/rubber');
})->name('rubber');
Route::get('english', function () {
    return view('./Home/Products/english');
})->name('english');
Route::get('money', function () {
    return view('./Home/Products/money');
})->name('money');
Route::get('peace', function () {
    return view('./Home/Products/peace');
})->name('peace');
Route::get('snake', function () {
    return view('./Home/Products/snake');
})->name('snake');
Route::get('spider', function () {
    return view('./Home/Products/spider');
})->name('spider');
Route::get('broad', function () {
    return view('./Home/Products/broad');
})->name('broad');
Route::get('chiense', function () {
    return view('./Home/Products/chiense');
})->name('chiense');
Route::get('boston', function () {
    return view('./Home/Products/Boston');
})->name('boston');
Route::get('salt', function () {
    return view('./Home/Products/Salt');
})->name('salt');
Route::get('gallery', function () {
    return view('./Home/Gallery');
})->name('gallery');
Route::any('message', [HomeController::class, 'insert_message'])->name('message');
Route::any('load_img', [HomeController::class, 'load_img'])->name('load_img');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
