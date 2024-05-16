<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\solicitud_mantenimiento;
use App\Models\producto;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $datos = solicitud_mantenimiento::all();
        $productos = producto::all();

        view::share([
         'datos' => $datos,
         'productos' => $productos   

        ]);       
    }
}
