<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
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
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    Paginator::useBootstrap();

    // setLocale for php. Enables ->formatLocalized() with localized values for dates
    setlocale(LC_TIME, config('app.locale_php'));

    // setLocale to use Carbon source locales. Enables diffForHumans() localized
    Carbon::setLocale(config('app.locale'));

    Relation::morphMap([
      'user'                      => \App\Models\Access\User::class,
      'role'                      => \App\Models\Access\Role::class,
      'permission'                => \App\Models\Access\Permission::class,
    ]);
  }
}
