<?php
namespace App\Http\View\Composers;

use App\Models\Page;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\View\CheckPath;

class PageComposer {

    public function compose(View $view) {
        $path = CheckPath::path();
        $page = Page::where('title',$path)->first();
        // dd($page);
        $view->with('page',$page);
    }
}