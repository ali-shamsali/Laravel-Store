<?php

namespace App\Providers;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{

    public const HOME = '/home';


    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/home.php'));

            Route::middleware(['web','auth'])
                ->prefix("Management")
                ->group(base_path('routes/admin.php'));
        });
    }
}
