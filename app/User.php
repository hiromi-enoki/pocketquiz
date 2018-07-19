<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    //一対多
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
    






    public function favoritings()
        {
            return $this->belongsToMany(Quiz::class, 'user_favorite', 'user_id', 'favorite_id')->withTimestamps();
        }
        
        public function favorite($userId)
    {
        // confirm if already following
        $exist = $this->is_favoriting($userId);
        
        if ($exist) {
            // do nothing if already following
            return false;
        } else {
            // follow if not following
            $this->favoritings()->attach($userId);
            return true;
        }
    }
    
    public function unfavorite($userId)
    {
        // confirming if already following
        $exist = $this->is_favoriting($userId);
        
    
    
        if ($exist) {
            // stop following if following
            $this->favoritings()->detach($userId);
            return true;
        } else {
            // do nothing if not following
            return false;
        }
    }
    
        
        public function is_favoriting($userId) {
        return $this->favoritings()->where('favorite_id', $userId)->exists();
        }
        
}