<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Quiz;



class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(9);
        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        $quizzes = $user->quizzes()->orderBy('created_at', 'desc')->paginate(9);

        $data = [
            'user' => $user,
            'quizzes' => $quizzes,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }
    
     public function mypage($id)
    {
        if (\Auth::check()) {
        $user = \Auth::user();
        $quizzes = $user->quizzes()->orderBy('created_at', 'desc')
        ->paginate(9)
        ;
        $quiz = Quiz::all(); //すべてのクイズを出す
        $favoritings = $user->favoritings()->orderBy('created_at', 'desc')
        ->paginate(9)
        ;
        // dd($favoritings->get()->toArray());
        
        return view('users.mypage',[
            'quizzes' => $quizzes,
            'user' => $user,
            'quiz' => $quiz,
            'favoritings' => $favoritings,
            ]);
    }else {
            return view('welcome');
    }  
    }
    
    // mypageからクイズ一覧に飛ばす
    
    public function myquestion($id)
    {
        if (\Auth::check()) {
        $user = \Auth::user();
        $quiz = Quiz::find($id);  //quiz model
        
        $quizzes = $user->quizzes()->orderBy('created_at', 'desc')
        ->paginate(9)
        ;
        $questions = $quiz->questions()->orderBy('created_at', 'desc')
        ->paginate(9)
        ;
        
        
        return view('users.myquestions',[
            'quiz' => $quiz,
            // 'question' => $question,
            'questions' => $questions,
            // 'answers' => $answers,
            'quizzes' => $quizzes,
            'user' => $user,
            ]);
    }else {
            return view('welcome');
    }  
    }
    
}
