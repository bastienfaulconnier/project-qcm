<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status_question', 'note', 'user_id', 'question_id'
    ];

    public function question() {

    	return $this->belongsTo(Question::class);
    }

    public function user() {

    	return $this->belongsTo(User::class);
    }
}
