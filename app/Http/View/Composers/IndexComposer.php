<?php
namespace App\Http\View\Composers;

use App\Models\Service;
use App\Models\Opportunity;
use Illuminate\View\View;

class IndexComposer {
    
    protected $service, $opps;

    public function compose(View $view) {
        $this->services = Service::all();
        $this->opps = Opportunity::all();
        $view->with([
            'services' => $this->services,
            'opps' => $this->opps,
        ]);
    }
}