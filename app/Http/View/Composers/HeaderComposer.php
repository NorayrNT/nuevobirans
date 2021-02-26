<?php
namespace App\Http\View\Composers;

use App\Models\Menu;
use App\Models\Social;
use Illuminate\View\View;

class HeaderComposer {
    
    protected $menu,$socials;

    public function compose(View $view) {
        $this->menu = Menu::orderBy('order','asc')->get();
        $this->socials = Social::all();

        $view->with([
            'menu' => $this->menu,
            'socials' => $this->socials
        ]);
    }
}