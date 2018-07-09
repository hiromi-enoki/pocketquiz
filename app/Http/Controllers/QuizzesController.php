<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quiz;

use App\Http\Controllers\Controller;


class QuizzesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $quizzes = $user->quizzes()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'quizzes' => $quizzes,
            ];
            $data += $this->counts($user);
            return view('users.show', $data);
        }else {
            return view('welcome');
        }
    }
    
    public function show($id)
    {
    // quizzes.showに飛ばす
        $quiz = Quiz::find($id);
        $question = \DB::table('quizzes')->join('questions', 'quizzes.id', '=', 'questions.q_id')->select('quizzes.*','quizzes.title', 'questions.question', 'questions.answer')->orderBy('quizzes.id', 'DESC')->get();
        var_dump($quiz, $question); //変数内要素確認用0709
        return view('quizzes.show',[
            'quiz' => $quiz,
            'question' => $question,
            ]);
            
        
    }
        
    
    
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:191',
            // 'question' => 'required|max:191',
            // 'answer' => 'required|max:191',
        ]);

        // $request->user()->quizzes()->create([
        //     'title' => $request->title,
        // ]);
        
        // $request->question()->quizzes()->create([
        //     'question' => $request->question,
        //     'answer'=> $request->answer,
        //     ]);

        return redirect()->back();
    }
    
    public function destroy($id)
    {
        $quiz = \App\Quiz::find($id);

        if (\Auth::id() === $quiz->user_id) {
            $quiz->delete();
        }

        return redirect()->back();
    }
}
