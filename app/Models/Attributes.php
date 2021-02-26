<?php
namespace App\Models;

trait Attributes {
    
    public function explode($type= null) {
        return !is_null($type) ? explode(",",$this->$type) : $this->$type;
    }    
}