<?php

namespace App\Modules\Post\Providers;

use App\Modules\Post\Contracts\PostExportContract;
use App\Modules\Post\Manager\PostExportManager;
use Illuminate\Contracts\Support\DeferrableProvider;
use App\Modules\Post\Commands\PostImportCommand;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class PostServiceProvider extends ServiceProvider implements DeferrableProvider
{

    /**
     * @return void
     */
    public function register()
    {
        parent::register();

        $this->app->singleton('export', function ($app) {
            return new PostExportManager($app);
        });

        $this->app->singleton('export.driver', function ($app) {
            return $app['export']->driver();
        });

        $this->app->bind(PostExportContract::class, function ($app) {
            return new PostExportManager($app);
        });
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

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['export', 'export.driver'];
    }
}
