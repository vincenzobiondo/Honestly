<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementsController;

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

Route::get('/', [PublicController::class,'homepage'])->name('homepage');

Route::get('/about', [PublicController::class,'about'])->name('about');

Route::get('/dettaglio/{articoloId}', [PublicController::class,'showDetails'])->name('articoli.show');

Route::get('/contattaci',[PublicController::class,'contactUs'])->name('contactUs');

Route::post('/contattaci/submit', [PublicController::class,'submit'])->name('submit');

//AnnouncementsController
//Rotta parametrica per vedere dettaglio annunci
Route::get('/offerte/annunci/dettaglio/{announcement}',[AnnouncementsController::class,'show'])->name('announcements.show');

Route::get('/offerte/annunci',[AnnouncementsController::class,'index'])->name('announcements.index');
// Mostra la vista con il form che l'utente può compilare
Route::get('/annunci/create',[AnnouncementsController::class,'create'])->name('announcements.create');
// Gestirà la logica per creare un nuovo annuncio
Route::post('/annunci/store',[AnnouncementsController::class,'store'])->name('announcements.store');