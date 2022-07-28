<?php

namespace App\Models;

use App\Traits\Slugger;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Slugger;

    protected $fillable = [
        'title', 'content', 'excerpt', 'category_id', 'image', 'slug', 'user_id'
    ];

    // static protected $slugColumnName = 'percorso';
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function tags() {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
