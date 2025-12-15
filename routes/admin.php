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
// settings footer label
Route::get('/settings/footer/social' , \App\Livewire\Admin\Settings\Footer\Social::class)->name('admin.setting.footer.social');
// settings footer logo
Route::get('/settings/footer/logo' , \App\Livewire\Admin\Settings\Footer\Logo::class)->name('admin.setting.footer.logo');
// update footer logo
Route::get('/settings/footer/updatelogo/{footerlogo}' , \App\Livewire\Admin\Settings\Footer\Updatelogo::class)->name('admin.setting.footer.updatelogo');
// trash footer logo
Route::get('/settings/footer/trashlogo' , \App\Livewire\Admin\Settings\Footer\Trashlogo::class)->name('admin.setting.footer.trashlogo');
// footer menu
Route::get('/settings/footer/menu' , \App\Livewire\Admin\Settings\Footer\Menu::class)->name('admin.setting.footer.menu');
// update footer menu
Route::get('/settings/footer/updatemenu/{footermenu}' , \App\Livewire\Admin\Settings\Footer\Updatemenu::class)->name('admin.setting.footer.updatemenu');
// enamad
Route::get('/settings/footer/namad' , \App\Livewire\Admin\Settings\Footer\Namad::class)->name('admin.setting.footer.namad');
// logs
Route::get('/settings/logs' , \App\Livewire\Admin\Settings\Log::class)->name('admin.log');
// permissions
Route::get('/permissions' , \App\Livewire\Admin\Permissions\Index::class)->name('admin.permissions');
// roles
Route::get('/roles' , \App\Livewire\Admin\Roles\Index::class)->name('admin.roles');

