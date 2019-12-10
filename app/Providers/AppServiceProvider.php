<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
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
        // Validator::extend('checkyear', function($attribute, $value, $parameters, $validator) {
        //        if(!($value % 400 != 0) && ($value % 4 != 0 && $value % 100 == 0)) {
        //             return false;   
        //         }
        //         return true;
        //         // 
        // });
        Validator::extendImplicit('checkyear', function($attribute, $value, $parameters, $validator) {
            if(($value % 400 != 0) && ($value % 4 != 0 && $value % 100 == 0)) {
                return false;
            }
             return true;
        });
    }
}
