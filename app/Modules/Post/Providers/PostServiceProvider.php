<?php

namespace App\Modules\Post\Providers;

use App\Modules\Post\Commands\PostImportCommand;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class PostServiceProvider extends ServiceProvider
{

    public function register()
    {
        parent::register();
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('app/Modules/Post/Routes/api.php'));
        });

        if ($this->app->runningInConsole()) {
            $this->commands([
                PostImportCommand::class,
            ]);
        }
    }
}
