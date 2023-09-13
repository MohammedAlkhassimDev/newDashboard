<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
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
        // $setting  = Setting::checkSetting();

        // $categories = Category::where ('status', 'active') -> where ('is_parent', 1) -> get();

        // view() -> share([
        //     'setting' => $setting,
        //     'categories' => $categories
        // ]);

    } // End of boot
}