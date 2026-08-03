<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Contracts\LoginViewResponse;
use App\Http\Responses\LoginViewResponse as CustomLoginViewResponse;


class FortifyServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(LoginViewResponse::class, CustomLoginViewResponse::class);
    }

    public function boot()
    {
        Fortify::loginView(function () {
            return view('auth.login');
        });
    }
}
