<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Quiz;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', [
            'users' => $users,
        
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        $quizzes = $user->quizzes()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'quizzes' => $quizzes,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }
    
    
    public function favoritings($id)
    {
        $user = User::find($id);
        $favoritings = $user->favoritings()->paginate(10);

        $data = [
            'user' => $user,
            'quizzes' => $favoritings,
        ];

        // $data += $this->counts($user);

        return view('users.favoritings');
    }
    
    
}
