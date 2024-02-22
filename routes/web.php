<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('generate-Pdf', [App\Http\Controllers\PdfController::class, 'generatePdf']);

Route::get('gallery', [App\Http\Controllers\GalleryController::class, 'index']);
Route::get('gallery/upload', [App\Http\Controllers\GalleryController::class, 'create']);
Route::post('gallery/upload', [App\Http\Controllers\GalleryController::class, 'store']);
Route::get('gallery/{galleryId}/delete', [App\Http\Controllers\GalleryController::class, 'destroy']);

Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('categories/create',[App\Http\Controllers\CategoryController::class, 'create']);
Route::post('categories/create',[App\Http\Controllers\CategoryController::class, 'store']); 
Route::get('categories/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::put('categories/{id}/edit', [App\Http\Controllers\CategoryController::class, 'update']);
Route::get('categories/{id}/delete', [App\Http\Controllers\CategoryController::class, 'destroy']);

Route::get('products', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('products/create', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('products/create', [App\Http\Controllers\ProductController::class, 'store']);
Route::get('products/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit']);
Route::put('products/{id}/edit', [App\Http\Controllers\ProductController::class, 'update']);
Route::get('products/{id}/delete', [App\Http\Controllers\ProductController::class, 'destroy']);

Route::get('products/{productId}/upload', [App\Http\Controllers\ProductImageController::class, 'index']);
Route::post('products/{productId}/upload', [App\Http\Controllers\ProductImageController::class, 'store']);
Route::get('product-image/{productImageId}/delete', [App\Http\Controllers\ProductImageController::class, 'destroy']);

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
