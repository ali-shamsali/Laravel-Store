<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/',  \App\Livewire\Home\Home\Index::class)->name('home.home');

Route::get('/register',  \App\Livewire\Home\Users\Register::class)->name('register');
Route::get('/login',  \App\Livewire\Home\Users\Login::class)->name('login');
/* Auth::routes();
 */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
