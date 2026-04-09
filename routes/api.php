<?php

use App\Http\Controllers\Api\Grapes\GrapesPageController;
use App\Http\Controllers\Api\System\FilesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'grapes'], function () {
    Route::get('/', [GrapesPageController::class, 'getProjectContent'])->name('grapes.get-page-content');
    Route::post('/', [GrapesPageController::class, 'savePageContent'])->name('grapes.save-page-content');
});

Route::group(['prefix' => 'system'], function () {
    Route::post('/upload', [FilesController::class, 'upload']);
});