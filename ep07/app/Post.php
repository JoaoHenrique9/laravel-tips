<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'posts_categories','post', 'category');
    }
}
