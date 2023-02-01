<?php

namespace LaravelGrid;

use Illuminate\Support\ServiceProvider;

class GridServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('grid', function () {
            return new Grid();
        });

        $this->app->alias('grid', Grid::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->alias('grid', Grid::class);
    }
}
