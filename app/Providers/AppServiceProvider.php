<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use DB;
use Cart;
use Illuminate\Support\Facades\Session;

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
        $loai = DB::table('loai')->get();
        $demloai = DB::table('loai')->count();
        $congdung = DB::table('congdung')->get();
        $ngoaite = DB::table('ngoaite')->get();
        View::share('loai', $loai); // <= Truyền dữ liệu
        View::share('congdung', $congdung);
        View::share('demloai', $demloai);
        View::share('ngoaite', $ngoaite);
        
        // $countCart = Cart::getContent()->count();
        // View::share('countCart',$countCart);
        // $total = Cart::getTotal();
        
        //share all view
        view()->composer('*', function ($view) 
        {
            $view->with('cart', Cart::getContent());    
        }); 

        //Tổng số lượng
        view()->composer('*', function ($view) 
        {
            $view->with('total', Cart::getContent()->count());    
        }); 

        //Tổng số tiền
        view()->composer('*', function ($view) 
        {
            $view->with('totalPrice', Cart::getTotal());    
        }); 


        
            
        Schema::defaultStringLength(191);
    }
}
