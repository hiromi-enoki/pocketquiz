<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quiz;

use App\Question;

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
        if (\Auth::check()) {
             $user = \Auth::user();
             $quizzes = Quiz::orderBy('id', 'DESC')->paginate(9);
    
        return view('users.show',[
            'quizzes' => $quizzes]);
        }else {
            return view('welcome');
        }
        
    //  $posts = Post::orderBy('id', 'DESC')->get();
    
        
        // $data = [];
        // if (\Auth::check()) {
        //     $user = \Auth::user();
        //     $quizzes = $user->quizzes()->orderBy('created_at', 'desc')->paginate(10);

        //     $data = [
        //         'user' => $user,
        //         'quizzes' => $quizzes,
        //     ];
        //     $data += $this->counts($user);
        //     return view('users.show', $data);
        // }else {
        //     return view('welcome');
        // }
    }
    
public function show($id)
    {
    // quizzes.showに飛ばす
    if (\Auth::check()) {
        $user = \Auth::user();
        $quiz = Quiz::find($id);  //title
        $question = \DB::table('quizzes')->join('questions', 'quizzes.id', '=', 'questions.q_id')->select('questions.question')->get();
        $answer = \DB::table('quizzes')->join('questions', 'quizzes.id', '=', 'questions.q_id')->select('questions.answer')->get();
        $quizzes = $user->quizzes()->orderBy('created_at', 'desc')->paginate(9);
        $questions = $quiz->questions()->orderBy('created_at', 'desc')->paginate(9);
        $answers = $quiz->answers()->orderBy('created_at', 'desc')->paginate(9);
        // var_dump($quiz, $question); //変数内要素確認用0709
        return view('quizzes.show',[
            'quiz' => $quiz,
            'question' => $question,
            'questions' => $questions,
            'answers' => $answers,
            'quizzes' => $quizzes,
            'user' => $user
            ]);
    }else {
            return view('welcome');
    }
    }
    
    public function action($id)
    {
        if (\Auth::check()) {
        $user = \Auth::user();
        $quiz = Quiz::find($id);  //title
        $question = \DB::table('quizzes')->join('questions', 'quizzes.id', '=', 'questions.q_id')->select('questions.question')->get();
        $answer = \DB::table('quizzes')->join('questions', 'quizzes.id', '=', 'questions.q_id')->select('questions.answer')->get();
        $quizzes = $user->quizzes()->orderBy('created_at', 'desc')->paginate(10);
        $questions = $quiz->questions()->orderBy('created_at', 'desc')->paginate(10);
        $answers = $quiz->answers()->orderBy('created_at', 'desc')->paginate(10);
 

        
        return view ('quizzes.questions', [
            'quiz' => $quiz,
            'question' => $question,
            'questions' => $questions,
            'answer' => $answer,
            'answers' => $answers,
            'quizzes' => $quizzes,
            'user' => $user
            ]);
    }else {
            return view('welcome');
    }
    }
        
    
    
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:191',
            'question' => 'required|max:191',
            'answer' => 'required|max:191',
        ]);

        $mondai = $request->user()->quizzes()->create([
            'title' => $request->title,
        ]);
        
        $mondai->questions()->create([
            'question' => $request->question,
            'answer'=> $request->answer,
            ]);
            
            

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
    
    
    public function create()
    {
        if (\Auth::check()) {
        $user = \Auth::user();
        
 

        
       return view('quizzes.create', [
           
            'user' => $user
            ]);
    }else {
            return view('welcome');
    }
    }
    
    //editing function
    
        public function edit($id)
    {
       $quiz = \App\Quiz::find($id);
       $question = \DB::table('quizzes')->join('questions', 'quizzes.id', '=', 'questions.q_id')->select('questions.question','questions.answer')->get();

    //   dd($quiz->questions()->get()->toArray()[0]['answer']);
        return view('quizzes.edit', [
            'quiz' => $quiz,
        ]);
    }
    
        public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:191',
            'question' => 'required|max:191',
            'answer' => 'required|max:191',
        ]);
        $quiz = Quiz::find($id);

        // $quiz->title = $request->title;
        // $quiz->questions = $request->question;
        // $quiz->answer = $request->answer;
        // $quiz->save();

        $quiz->update([
            'title' => $request->title,
        ]);

        
        $quiz->questions()->update([
            'question' => $request->question,
            'answer'=> $request->answer,
           
            ]);

        return redirect('/');
    }
}