<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ValidateEmail;
use App\Models\SendEmail;
use App\Models\Portfolio;

class PureController extends Controller
{
    
    public function index() {
        $works = Portfolio::simplePaginate(4);
        
        return View::make("pages.index",compact('works'));
    }

    public function global(Request $request) {        
        $uri = $request->path();
        $view = "pages.{$uri}";        
        
        return View::make($view);
    }

    protected function ContactUs(ValidateEmail $request) {
        $validated = $request->validated();
        
        $msg = SendEmail::email($request->except('_token'));
        
        $request->session()->flash('msg_status',$msg);
        
        return redirect()->back();
    }
}
