<?php

use App\Http\Controllers\aboutControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\importMouController;
use App\Http\Controllers\ourClientController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/backend/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/backend/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/backend/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/',[HomeController::class,'index'])->name('home.page');
Route::get('home',[HomeController::class,'index'])->name('home');
//contact
Route::get('contact',[ContactController::class,'index'])->name('contact');
//เกี่ยวกับเรา
Route::get('about-us',[aboutControler::class,'index'])->name('about');
//คำถามที่พบบ่อย
Route::get('faq',[FaqController::class,'index'])->name('faq.index');
//ลูกค้าของเรา
Route::get('our-client',[ourClientController::class,'index'])->name('ourclient.index');
// MOU
Route::get('mou',[importMouController::class,'index'])->name('mou.index');

//บทความ

// Route::resource('/backend/articles', ArticleController::class);
Route::get('articles/{id}',[ArticleController::class,'show'])->name('articles.show');

Route::get('articles',[ArticleController::class,'web'])->name('articles.web');

Route::middleware('auth')->group(function () {
    Route::get('/backend/articles/',[ArticleController::class,'index'])->name('articles.index');
    Route::get('/backend/articles/create',[ArticleController::class,'create'])->name('articles.create');
    Route::get('/backend/edit/{id}/articles/',[ArticleController::class,'edit'])->name('articles.edit');
    Route::put('/backend/articles/store',[ArticleController::class,'store'])->name('articles.store');
    Route::put('/backend/update/{id}/articles/',[ArticleController::class,'update'])->name('articles.update');
    Route::delete('/backend/destroy/{id}/articles/',[ArticleController::class,'destroy'])->name('articles.destroy');
});

// Image upload
Route::post('/ckeditor/upload', [ImageUploadController::class, 'upload'])->name('ckeditor.upload');

//บริการของเรา
Route::get('services',[serviceController::class,'show'])->name('services.show');
Route::get('services/{id}/modal/',[serviceController::class,'modalShow'])->name('services.modalShow');
Route::get('services/{id}/view/',[serviceController::class,'view'])->name('services.view');
// Route::resource('services',serviceController::class);
