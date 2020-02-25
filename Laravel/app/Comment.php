<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    protected $fillable = ['content'];

    public function likes() {
        return $this->hasMany('App\Like');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function posts() {
        return $this->belongsToMany('App\Post')->withTimestamps();
    }
}
