<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', function () {
    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| ODRONCON Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/odcon', [WebsiteController::class, 'home'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/hackathon', [WebsiteController::class, 'hackathon'])->name('hackathon');
Route::get('/expo', [WebsiteController::class, 'expo'])->name('expo');
Route::get('/showcase', [WebsiteController::class, 'showcase'])->name('showcase');
Route::get('/investment', [WebsiteController::class, 'investment'])->name('investment');
Route::get('/support', [WebsiteController::class, 'support'])->name('support');
Route::get('/budget', [WebsiteController::class, 'budget'])->name('budget');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');