<?php
use App\Http\Controllers\ArticleController;
use App\Http\Middleware\ValidateJsonApiHeaders;
use Illuminate\Support\Facades\Route;

Route::middleware([ValidateJsonApiHeaders::class])->group(function () {
    Route::get('articles/{article}', [ArticleController::class, 'show'] )->name('api.v1.articles.show');
    Route::get('articles', [ArticleController::class, 'index'] )->name('api.v1.articles.index');
    Route::post('articles', [ArticleController::class, 'store'] )->name('api.v1.articles.store');
});
