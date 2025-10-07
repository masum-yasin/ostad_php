<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    protected $guarded = [];

     function tag(){

        return $this->hasMany(Post::class);
    }

   
}
