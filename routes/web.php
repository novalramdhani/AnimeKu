<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AnimeTopController;
use App\Http\Controllers\AnimeSeasonsController;
use App\Http\Controllers\AnimeCharactersController;

Route::get('/', [AnimeController::class, 'index'])->name('anime.index');
Route::get('/anime/{id}', [AnimeController::class, 'show'])->name('anime.show');

Route::get('/seasons', [AnimeSeasonsController::class, 'seasons'])->name('anime.seasons');
Route::get('/tops', [AnimeTopController::class, 'tops'])->name('anime.tops');

Route::get('/characters', [AnimeCharactersController::class, 'characters'])->name('anime.characters');
Route::get('/characters?page={page?}', [AnimeCharactersController::class, 'characters'])->name('anime.characters');
