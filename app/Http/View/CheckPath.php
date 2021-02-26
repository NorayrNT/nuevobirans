<?php
namespace App\Http\View;

use Illuminate\Http\Request;

class CheckPath {

    protected $request;

    public function __construct() {        
        $this->request = new Request;
    }

    // Get path
    public static function getPath($path) {
        switch($path) {
            case "base_url()":
                $path = '/';
                break;
            case 'about':
                $path = 'about';
                break;
            case 'contact':
                $path = 'contact';
                break;
            case 'education':
                $path = 'education';
                break;
            default:
                $path = '/';
        }

        return $path;
    }

    public static function  path() {
        $path = url()->current();
        $segments = explode("/",$path);
        $current = count($segments) ?  $segments[count($segments) - 1] : '/';
        $path = self::getPath($current);


        return $path;
    }

}