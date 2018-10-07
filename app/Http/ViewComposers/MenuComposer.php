<?php

namespace App\Http\ViewComposers;
// use Illuminate\Support\Facades\DB;
use App\Product_category; 

//для версии 5.2 и выше:
use Illuminate\View\View;
// use App\Repositories\UserRepository;

//для версии 5.1 и ранее:
//use Illuminate\Contracts\View\View;
//use Illuminate\Users\Repository as UserRepository;

class MenuComposer
{
  /**
   * Реализация пользовательского репозитория.
   *
   * @var UserRepository
   */
  // protected $users;
  protected $categories;

  /**
   * Создание построителя нового профиля.
   *
   * @param  UserRepository  $users
   * @return void
   */
  public function __construct()
  {
    // Зависимости автоматически извлекаются сервис-контейнером...


    // $cats=DB::table('product_categories')->pluck('name', 'id');

    $cats=Product_category::all();
    $this->categories=$cats;
  }

  // /**
  //  * Привязка данных к представлению.
  //  *
  //  * @param  View  $view
  //  * @return void
  //  */
  public function compose(View $view)
  {
    $view->with('categories', $this->categories);
    // $view->with('categories', 123);
  }


}