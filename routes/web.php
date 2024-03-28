<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\EventController;
Route::get('/home', [PageController::class, 'liste_event']);
Route::get('/update_event/{id}', [PageController::class, 'update_event']);

Route::get('/ajouter', [PageController::class, 'ajouter_event']);
Route::get('/ajouter/traitement', [PageController::class, 'ajouter_event_traitement']);

Route::get('/update/traitement', [PageController::class, 'update_event_traitement']);


Route::post('/ajouter/traitement', [EventController::class, 'store'])->name('events.store');
Route::get('/acceuil', [PageController::class, 'acceuil']);
