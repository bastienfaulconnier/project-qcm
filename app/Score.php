<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public function question() {

    	return $this->belongTo(Question::class);
    }

    public function user() {

    	return $this->belongTo(User::class);
    }
}
