<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|test command
*/

// 1-Do something  in route




Route::get('/Hello', function () {
    return 'Hello World';
});


// 2-call view in route

Route::get('/welcome', function () {
    return view('welcome');
});

// 3-call controller

Route::get('/',[HomeController::class,'index'])->name('home');


//4-route->controller->view

Route::get('/test',[HomeController::class,'test'])->name('test');

//5-route with parametre

Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');

// 6-route with post

Route::post('/save',[HomeController::class,'save'])->name('save');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//********Admin Category Routes***************
Route::prefix('admin')->name('admin.')->group(function (){
Route::get('/admin',[AdminHomeController::class,'index'])->name('index');

Route::prefix('category')->name('category.')->controller(AdminCategoryController::class)->group(function (){
//********Admin Panel Routes***************

Route::get('/','index')->name('index');
Route::get('/create','create')->name('create');
Route::post('/store','store')->name('store');
Route::get('/edit/{id}','edit')->name('edit');
Route::post('/update/{id}','update')->name('update');
Route::get('/show/{id}','show')->name('show');
Route::get('/destroy/{id}','destroy')->name('destroy');

}); });
