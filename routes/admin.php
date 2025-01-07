<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Test route is working!';
});

Route::get('/', App\Livewire\Admin\Home\Index::class)->name('admin');
