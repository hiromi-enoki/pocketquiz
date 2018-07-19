<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    
    protected $fillable = ['title', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'q_id');
    }
    
    public function answers()
    {
        return $this->hasMany(Question::class, 'q_id');   
    }
    
}
