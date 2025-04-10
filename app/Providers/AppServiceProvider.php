<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Events\PostCreated;
use App\Listeners\SendPostNotification;
use Illuminate\Support\Facades\Event;



class AppServiceProvider extends ServiceProvider
{

    protected $listen = [
        PostCreated::class => [
            SendPostNotification::class,
        ],
    ];


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
        //
    }
}
