<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'user_id', 'published'
    ];

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    public function tag()
    {
        return $this->hasMany('App\Tag');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
