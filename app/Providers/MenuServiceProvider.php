<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    $verticalMenuThemeJson = file_get_contents(base_path('resources/theme/menu/verticalMenu.json'));
    $verticalMenuThemeData = json_decode($verticalMenuThemeJson);

    $verticalMenuAppJson = file_get_contents(base_path('resources/app/menu/verticalMenu.json'));
    $verticalMenuAppData = json_decode($verticalMenuAppJson);

    // Share all menuData to all the views
    \View::share('menuData', [$verticalMenuThemeData]);
    \View::share('menuAppData', [$verticalMenuAppData]);
  }
}
