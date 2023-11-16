<?php

namespace App\Providers;

use LunaToolbox\Framework\Illuminate\Support\Facades\Route as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->addRoutePath( base_path('/routes/web.php') );
    }
}
