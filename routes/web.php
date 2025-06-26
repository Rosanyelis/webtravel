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
    Route::get('/wellness-trip', [PagesController::class, 'experienceOne'])->name('pages.experienceone');
    Route::get('/food-travel', [PagesController::class, 'experienceTwo'])->name('pages.experiencetwo');
    Route::get('/family-tours', [PagesController::class, 'experienceThree'])->name('pages.experiencethree');
    Route::get('/sightseeing-tours', [PagesController::class, 'experienceFour'])->name('pages.experiencefour');
    Route::get('/walking-tours', [PagesController::class, 'experienceFive'])->name('pages.experiencefive');
    Route::get('/romantic-vacations-honeymoon', [PagesController::class, 'experienceSix'])->name('pages.experiencesix');
    Route::get('/travel-together-customized-adventures-for-group-of-9', [PagesController::class, 'experienceSeven'])->name('pages.experienceseven');
    Route::get('/empowering-solo-journeys-unique-tours-for-women-or-men', [PagesController::class, 'experienceEight'])->name('pages.experienceeight');
    Route::get('/tailor-made-travel-your-preferences-your-adventure', [PagesController::class, 'experienceNine'])->name('pages.experiencenine');
    Route::get('/small-group-adventures-your-personalized-expedition', [PagesController::class, 'experienceTen'])->name('pages.experienceten');    
    Route::get('/cherished-moments-couples-exclusive-tours', [PagesController::class, 'experienceEleven'])->name('pages.experienceeleven');
    Route::get('/destinations/peru', [PagesController::class, 'peru'])->name('pages.peru');
    Route::get('/destinations/peru-lima', [PagesController::class, 'peruLima'])->name('pages.peru-lima');
    Route::get('/destinations/peru-machupichu', [PagesController::class, 'peruMachupichu'])->name('pages.peru-machupichu');
    Route::get('/destinations/peru-puno', [PagesController::class, 'peruPuno'])->name('pages.peru-puno');
    Route::get('/destinations/peru-trujillo', [PagesController::class, 'peruTrujillo'])->name('pages.peru-trujillo');
    Route::get('/destinations/peru-cusco', [PagesController::class, 'peruCusco'])->name('pages.peru-cusco');
    Route::get('/destinations/peru-arequipa', [PagesController::class, 'peruArequipa'])->name('pages.peru-arequipa');
    Route::get('/destinations/argentina', [PagesController::class, 'argentina'])->name('pages.argentina');
    Route::get('/destinations/colombia', [PagesController::class, 'colombia'])->name('pages.colombia');
    Route::get('/destinations/ecuador', [PagesController::class, 'ecuador'])->name('pages.ecuador');
    Route::get('/destinations/chile', [PagesController::class, 'chile'])->name('pages.chile');
    Route::get('/destinations/bolivia', [PagesController::class, 'bolivia'])->name('pages.bolivia');
    Route::get('/destinations/brasil', [PagesController::class, 'brasil'])->name('pages.brasil');
    Route::get('/blog', [PagesController::class, 'blog'])->name('pages.blog');
});

// Ruta para cambiar idioma
Route::get('/lang/{locale}', [LanguageController::class, 'change'])->name('lang.change');

// Redireccionar la raíz al idioma por defecto
Route::get('/', function () {
    return redirect('/' . config('app.locale', 'en'));
})->name('home.redirect');
