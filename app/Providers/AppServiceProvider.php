<?php namespace App\Providers;

// use App\Repositories\Images\ImagesRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton('App\Repositories\Images\ImagesRepositoryInterface', function ($app) {
        //     return $app->make(ImagesRepository::class);
        // });
    }
}
