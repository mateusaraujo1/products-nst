<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;

use Illuminate\Support\Facades\Route;

Route::resource('produtos', ProdutoController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');

Route::get('categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');