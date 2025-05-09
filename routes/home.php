<?php

use Illuminate\Support\Facades\Route;

Route::get('/',  \App\Livewire\Home\Home\Index::class)->name('home.home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
