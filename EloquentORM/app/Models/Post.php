<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $guarded = [];

    function user(){
        return $this->belongsTo(User::class);
    }

    function comment(){
        return $this->hasMany(Comment::class);
    }

    function posttag(){
        return $this->belongsTo(PostTag::class);
    }

}
