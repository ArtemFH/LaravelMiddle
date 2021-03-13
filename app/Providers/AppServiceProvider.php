<?php

namespace App\Providers;

use http\Client\Curl\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Gate::before(function ($user, $role) {
//            return $user->role->name === $role;
//        });
//
//        Gate::before(function ($user, $like_nomination) {
//            return $user->like_nomination->name === $like_nomination;
//        });
    }
}
