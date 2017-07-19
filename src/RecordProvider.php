<?php

namespace Eugene\ApiLog;

use Eugene\ApiLog\Middleware\Record;
use Illuminate\Support\ServiceProvider;

class RecordProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations/');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //注册路由中间件
        app('router')->aliasMiddleware('api.log', Record::class);
    }
}
