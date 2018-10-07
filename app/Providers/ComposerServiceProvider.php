<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Product_category; 

class ComposerServiceProvider extends ServiceProvider
{
  /**
   * Регистрация привязок в контейнере.
   *
   * @return void
   */
  public function boot()
  {
    // Использование построителей на основе класса...
    //Вариант 3
    View::composer(
      'header', 'App\Http\ViewComposers\MenuComposer'
    );

    
       //Вариант 1 при изменении обязательно php artisan config:clear
       // View::composer('header', function($view)
       //  {
       //      $view->with('categories', Product_category::all());
       //  });
    
        //Вариант 2
       // View::share('categories', Product_category::all());
  }

  /**
   * Регистрация сервис-провайдера.
   *
   * @return void
   */
  public function register()
  {
    // $this->app->view->composer('header', 'App\Http\ViewComposers\MenuComposer');
  }
}