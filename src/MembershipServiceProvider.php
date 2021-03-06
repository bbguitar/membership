<?php

namespace Atorscho\Membership;

use Illuminate\Support\ServiceProvider;

class MembershipServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Configuration
        $this->publishes([
            __DIR__.'/../config/membership.php' => config_path('membership.php'),
        ]);

        // Migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Merge Configuration
        $this->mergeConfigFrom(
            __DIR__.'/../config/membership.php', 'membership'
        );
    }
}
