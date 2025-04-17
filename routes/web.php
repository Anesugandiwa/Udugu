<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//  Contact Routes
Route::get('/Contact', [ContactController::class, 'index'])->name('getUs');
Route::post('/Contact', [ContactController::class, 'store'])->name('send_message');

// About Routes

Route::get('/About',[PagesController::class, 'about']);
Route::get('/Innovation', [PagesController::class,'innovation']);
Route::get('/policy', [PagesController::class,'policy']);
Route::get('/Education', [PagesController::class,'education']);


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
