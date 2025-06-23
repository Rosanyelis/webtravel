<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\LanguageController;

// Rutas con prefijos de idioma
Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|es']], function () {
    Route::get('/', [PagesController::class, 'index'])->name('pages.index');
    Route::get('/crafted-for-you', [PagesController::class, 'CraftedForYou'])->name('pages.craftedforyou');
    Route::get('/experience', [PagesController::class, 'experience'])->name('pages.experience');
    Route::get('/highlights', [PagesController::class, 'highlights'])->name('pages.highlights');
    Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
    Route::get('/policy', [PagesController::class, 'policy'])->name('pages.policy');
    Route::get('/terms-and-conditions', [PagesController::class, 'termandcondition'])->name('pages.termandcondition');
    Route::get('/faqs', [PagesController::class, 'faq'])->name('pages.faq');
});

// Ruta para cambiar idioma
Route::get('/lang/{locale}', [LanguageController::class, 'change'])->name('lang.change');

// Redireccionar la raíz al idioma por defecto
Route::get('/', function () {
    return redirect('/' . config('app.locale', 'en'));
})->name('home.redirect');
