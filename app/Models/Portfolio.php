<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;

    // get and set images attribute
    public function setImgAttribute($images) {
        if (is_array($images)) {
            $this->attributes['img'] = json_encode($images);
        }
    }

    public function getImgAttribute($images) {
        return json_decode($images,true);
    }
}
