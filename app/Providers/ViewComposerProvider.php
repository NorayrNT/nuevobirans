<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\HeaderComposer;
use App\Http\View\Composers\IndexComposer;
use App\Http\View\Composers\ContactComposer;
use App\Http\View\Composers\PageComposer;
use App\Http\View\Composers\TeamComposer;
use Illuminate\Support\Facades\View;

class ViewComposerProvider extends ServiceProvider
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
        View::composer(
            ['includes.header','includes.footer','includes.mobile-menu'],
            HeaderComposer::class
        );

        View::composer(
            ['pages.index'],
            IndexComposer::class
        );

        View::composer(
            ['pages.contact','includes.footer'],
            ContactComposer::class
        );

        View::composer(
            ['pages.*','includes.title'],
            PageComposer::class
        );

        View::composer(
            ['includes.team'],
            TeamComposer::class
        );

    }
}
