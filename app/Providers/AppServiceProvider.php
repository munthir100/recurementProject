<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Worker;
use App\Observers\BlogObserver;
use App\Observers\WorkerObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Worker::observe(WorkerObserver::class);
        Blog::observe(BlogObserver::class);
    }
}
