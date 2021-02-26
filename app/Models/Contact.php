<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attributes;

class Contact extends Model
{
    use HasFactory, Attributes;

    protected $guarded = ['id'];

    public $timestamps = false;

    protected $attributes = [
        'phone' => '0'
    ];


    public function getJson($type,$index = null) {   
        $arr = $this->explode($type);
        return !is_null($index) ? $arr[$index] : $arr;
    }
}
