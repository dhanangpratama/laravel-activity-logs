<?php

namespace DhanangPratama\ActivityLogs\Providers;

use Illuminate\Support\ServiceProvider;
use DhanangPratama\ActivityLogs\Classes\ActivityLogs;

class ActivityLogsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('activitylogs', ActivityLogs::class);

        $this->mergeConfigFrom(
            realpath(__DIR__ . '/..') . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'activitylogs.php', 'activitylogs'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            realpath(__DIR__ . '/..') . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'activitylogs.php' => config_path('activitylogs.php'),
        ]);
    }
}
