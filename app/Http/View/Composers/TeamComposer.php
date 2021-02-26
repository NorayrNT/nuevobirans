<?php
namespace App\Http\View\Composers;

use App\Models\Team;
use Illuminate\View\View;

class TeamComposer {
    
    protected $members;

    public function compose(View $view) {
        $this->members = Team::all();
        $view->with(['members' => $this->members]);
    }
}