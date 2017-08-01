<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post() {

    	return $this->belongTo(Post::class);
    }
}
