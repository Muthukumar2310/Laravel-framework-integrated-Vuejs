<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/path/to/your/firebase-credentials.json');

        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();

        $this->app->instance('firebase', $firebase);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
