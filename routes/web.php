<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;


Route::get('/', [PageController::class, 'welcome'])->name("welcome");

Route::get('/articoli', [PageController::class, 'articles'])->name("articles");

Route::get('/articoli/{id}', [PageController::class, 'articles'])->name('articles.show');

Route::get('/contatti', [ContactController::class, 'contacts'])->name("contacts");
Route::post('/contatti/invia',[ContactController::class,'submit'])->name('contacts.submit');
//temporaneo
Route::get('articles/store',[ArticleController::class,'store']);


Route::get('/chi-siamo', [PageController::class, 'aboutUs'])->name("aboutUs");

