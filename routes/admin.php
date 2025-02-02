<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Test route is working!';
});

Route::get('/', App\Livewire\Admin\Home\Index::class)->name('admin');
// settings footer label
Route::get('/settings/footer/label' , \App\Livewire\Admin\Settings\Footer\Label::class)->name('admin.setting.footer.label');
// // settings footer label
Route::get('/settings/footer/social' , \App\Livewire\Admin\Settings\Footer\Social::class)->name('admin.setting.footer.social');
// // settings footer logo
Route::get('/settings/footer/logo' , \App\Livewire\Admin\Settings\Footer\Logo::class)->name('admin.setting.footer.logo');
