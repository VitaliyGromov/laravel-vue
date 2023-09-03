<?php

declare(strict_types=1);

use App\Http\Controllers\Person\PersonController;
use Illuminate\Support\Facades\Route;

Route::get('/people', [PersonController::class, 'index'])->name('people');
Route::post('/people', [PersonController::class, 'store'])->name('people.store');
Route::put('/people/{person}', [PersonController::class, 'update'])->name('people.update');
