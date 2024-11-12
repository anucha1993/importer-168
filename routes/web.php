<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImageUploadController;

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
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('home/index');
// });
// Route::get('/contact', function () {
//     return view('contact/index');
// });

//Home 
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('home',[HomeController::class,'index'])->name('home');
//contact
Route::get('contact',[ContactController::class,'index'])->name('contact');

//บทความ
Route::resource('articles', ArticleController::class);

// Image upload
Route::post('/ckeditor/upload', [ImageUploadController::class, 'upload'])->name('ckeditor.upload');

