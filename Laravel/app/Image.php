<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    protected $fillable = ['name', 'path'];

    public function posts() {
        return $this->belongsTo('App\Post');
    }
}
