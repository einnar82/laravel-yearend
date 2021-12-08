<?php

namespace App\Modules\Post\Providers;

use App\Modules\Post\Contracts\ExportContract;
use App\Modules\Post\Manager\PostExportManager;
use Illuminate\Contracts\Support\DeferrableProvider;
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

        $this->app->bind(ExportContract::class, function ($app) {
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
