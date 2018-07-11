<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['q_id', 'question', 'answer'];
    
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    
    
}
