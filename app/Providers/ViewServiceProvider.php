<?php


namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        /*View::composer(
            '*pages.welcome-content', 'App\Http\View\Composers\NotificationComposer'
        );*/
        /*View::composer('includes.navbar', function ($view) {
            $view->with('notifications',[]);
        });*/
    }
}
