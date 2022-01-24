<?php

namespace App\Providers;

use App\Services\History\TaskHistoryService;
use Illuminate\Support\ServiceProvider;

class TaskHistoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('TaskHistoryService', function () {
            return new TaskHistoryService();
        });
    }
}
