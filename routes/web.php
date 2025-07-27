<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});
// Route::get('/portfolio/{id}', function () {
//     return Inertia::render('Portfolio/Show');
// });
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');