<?php

namespace App\Providers;

use App\Models\LinkTerkait;
use App\Models\Menu;
use App\Models\Pengumuman;
use App\Models\Profile;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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

        // $linkTerkait = LinkTerkait::orderBy('urut','ASC')->get();
        // View::share('Menu', Menu::tree()->get()->toTree());
        Paginator::useBootstrapFive();
        // View::share('getProfile', Profile::find(1));
        View::share('getLinkTerkait', LinkTerkait::orderBy('urut','ASC')->get());
        // View::share('Pengumuman', Pengumuman::latest()->paginate(4));
    }
}
