<?php
namespace Sorethea\FilakubeAdmin;

use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->register(AuthServiceProvider::class);
        $this->app->register(ResourceServiceProvider::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->publishResources();
        }

    }

    public function publishResources(){
        $this->publishes([
            __DIR__ . '/Database/migrations/2022_08_17_160611_user_alter.php' => database_path('/migrations/2022_08_17_160611_user_alter.php'),
        ], 'filakube-admin-migrations');

        $this->publishes([
            __DIR__ . '/Database/seeders/PermissionSeeder.php' => database_path('/seeders/PermissionSeeder.php'),
        ], 'filakube-admin-seeds');
    }
}
