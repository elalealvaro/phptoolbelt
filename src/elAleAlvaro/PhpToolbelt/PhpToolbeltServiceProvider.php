<?php namespace elAleAlvaro\PhpToolbelt;

/**
 * 
 * Author: Alejandro Alvaro
 * Email: alealvaro@gmail.com
 * 
 */

use Illuminate\Support\ServiceProvider;

class PhpToolbeltServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['phptoolbelt'] = $this->app->share(function($app){
            return new PhpToolbelt;
        });

        $this->app->booting(function(){
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Toolbelt', 'elAleAlvaro\PhpToolbelt\Facades\PhpToolbelt');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

}