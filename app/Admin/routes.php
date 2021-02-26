<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('pages', PageController::class);
    $router->resource('contacts', ContactController::class);
    $router->resource('menus', MenuController::class);
    $router->resource('opportunities', OpportunityController::class);
    $router->resource('portfolios', PortfolioController::class);
    $router->resource('services', ServiceController::class);
    $router->resource('socials', SocialController::class);
    $router->resource('teams', TeamController::class);
});
