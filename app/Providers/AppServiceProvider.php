<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('admin.dashboard', function ($view) {
            $view->with('newUsersThisMonth', User::where('created_at', '>=', Carbon::now()->startOfMonth())->count());
        });
    }
}
