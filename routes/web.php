<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::get('/crafted-for-you', [PagesController::class, 'CraftedForYou'])->name('pages.CraftedForYou');
Route::get('/experience', [PagesController::class, 'experience'])->name('pages.experience');
Route::get('/highlights', [PagesController::class, 'highlights'])->name('pages.highlights');

