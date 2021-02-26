<?php
namespace App\Http\View\Composers;

use App\Models\Contact;
use App\Models\Social;
use Illuminate\View\View;

class ContactComposer {
    
    protected $contacts,$socials;

    public function compose(View $view) {
        $this->contacts = Contact::all();
        $this->socials =  Social::all();
        
        $arm_map = $this->contacts->where('country','Armenia');
        // dd($arm_map);
        $arm_map = count($arm_map) ? $arm_map->first()->map : '';
        $view->with([
            'contacts' => $this->contacts,
            'socials' => $this->socials,
            'map' => $arm_map
        ]);
    }
}