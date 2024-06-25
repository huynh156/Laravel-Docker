<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\PortMarkTestController;
use App\Http\Controllers\Admin\ProductController;


use App\Http\Controllers\Admin\TestmailController;

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('products', ProductController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('categories', CategoryController::class);
    
    Route::get('/portmark/test', [PortMarkTestController::class, 'test']);
    Route::get('/sendemail', [MailController::class, 'sendEmail']);
});


Route::post('/admin/brands', [BrandController::class, 'store'])->name('admin.brands.store');

//mail
Route::get('/testmail', [TestmailController::class, 'testmail']);
