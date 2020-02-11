<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = [];
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
