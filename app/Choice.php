<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'status', 'question_id'
    ];

    public function question() {

    	return $this->belongsTo(Question::class);
    }
}
