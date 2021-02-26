<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ValidateEmail;
use App\Models\SendEmail;


class PureController extends Controller
{
    
    public function global(Request $request) {        
        $uri = $request->path();
        $view = $uri == '/' ? 'pages.index' : "pages.{$uri}";        
        
        return View::make($view);
    }

    protected function ContactUs(ValidateEmail $request) {
        $validated = $request->validated();
        
        $msg = SendEmail::email($request->except('_token'));
        
        $request->session()->flash('msg_status',$msg);
        
        return redirect()->back();
    }
}
