<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'image', 'author',
    ];
}
