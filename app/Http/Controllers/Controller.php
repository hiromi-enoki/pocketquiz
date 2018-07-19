<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($user) {
        // $count_quizzes = $user->quizzes()->count();
        
        $count_favoritings = $user->favoritings()->count();

        return [
            // 'count_quizzes' => $count_quizzes,
            
            'count_favoritings' => $count_favoritings,
        ];
    }
}
