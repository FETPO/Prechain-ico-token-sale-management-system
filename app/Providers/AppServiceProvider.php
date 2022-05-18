<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Support\Facades\View;
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
        //
        $settings = Settings::where('id', '1')->first();
        View::share('settings', $settings);
        config([
            'livewire.asset_url' => $settings->install_type == 'Sub-Folder' ? $settings->site_url : null
        ]);
    }
}
