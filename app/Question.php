<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'class_level', 'status'
    ];

    public function choices() {

    	return $this->hasMany(Choice::class);
    }

    public function scores() {

    	return $this->hasMany(Score::class);
    }
}
