<?php

use App\Http\Controllers\Pages\PageController;
use App\Http\Controllers\Pages\TestPageController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
});

// Route::group(['prefix' => 'test-page'], function () {
//     Route::get('/', [TestPageController::class, 'index'])->name('test-page.index');
//     Route::get('/editor', [TestPageController::class, 'editor'])->name('test-page.editor');
// });

require __DIR__.'/auth.php';
