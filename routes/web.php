<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});
// Route::get('/portfolio/{id}', function () {
//     return Inertia::render('Portfolio/Show');
// });
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/test', function() {
    return 'Laravel is working!';
});