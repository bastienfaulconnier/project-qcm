<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function choices() {

    	return $this->hasMany(Choice::class);
    }

    public function scores() {

    	return $this->hasMany(Score::class);
    }
}
