<?php

namespace App\Providers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\NewsCategory;
use App\Models\Newz;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View ;
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
        View::composer(['layouts.partials.navbar'], function ($view){
            $settings = Setting::all()->first();
            $ads = Ad::all();
            $newis = Newz::orderBy('id', 'DESC')->take(3)->get();
            $categorys = Category::orderBy('sira','ASC')->take(15)->get();
            $view->with(compact('categorys','settings','ads','newis'));
        });
        View::composer(['layouts.partials.footer'], function ($view){
            $settings = Setting::all()->first();
            // top news
            $topnews = Newz::orderBy('id', 'DESC')->take(3)->get();

            $view->with(compact('settings','topnews'));
        });
        View::composer(['admin.layouts.partials.sidebar'], function ($view){
            $settings = Setting::all()->first();
            $view->with(compact('settings'));
        });
        View::composer(['admin.layouts.partials.mobile-navbar'], function ($view){
            $settings = Setting::all()->first();
            $view->with(compact('settings'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//             DB::listen(function($query){
//            dump(
//               $query->sql,
//               $query->bindings
//          );
//
//       });
    }
}
