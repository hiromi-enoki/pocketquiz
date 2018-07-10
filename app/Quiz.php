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
    

    
//   quizに複数のquestion
     public function questions()
     {
         return $this->belongsTo(Quiz::class);
     }
    
}
