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
			 $quizzes = Quiz::orderBy('id', 'DESC')->paginate(12);
			 $favoritings = $user->favoritings();
	
		return view('users.show',[
			'me' => $user,
			'quizzes' => $quizzes,
			'favoritings' => $favoritings,
			]);
		}else {
			return view('welcome');
		}
		
  
	
		
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
		$quiz = Quiz::find($id);  //quiz model
		
		$quizzes = $user->quizzes()->orderBy('created_at', 'desc')
		->paginate(10)
		;
		$questions = $quiz->questions()->orderBy('created_at', 'asc')
		->paginate(10)
		;
	 // $answers = $quiz->answers()->orderBy('created_at', 'desc')->paginate(10);
		
		return view('quizzes.show',[
			'quiz' => $quiz,
			// 'question' => $question,
			'questions' => $questions,
			// 'answers' => $answers,
			'quizzes' => $quizzes,
			'user' => $user,
		   
			]);
	}else {
			return view('welcome');
	}}
	
	public function action($id)
	{
		if (\Auth::check()) {
		 $user = \Auth::user();
		$quiz = Quiz::find($id);  //quiz model
		
		$quizzes = $user->quizzes()->orderBy('created_at', 'desc')
		->paginate(10)
		;
		$questions = $quiz->questions()->orderBy('created_at', 'desc')
		->paginate(10)
		;
 

		
		return view ('quizzes.questions', [
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
		
	
	//create title / store and destroy
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
	
	public function store(Request $request)
	{
		$user = \Auth::user();
		
		$this->validate($request, [
			'title' => 'required|max:191',
			// 'question' => 'required|max:191',
			// 'answer' => 'required|max:191',
		]);

		$quiz = $request->user()->quizzes()->create([
			'title' => $request->title,
		]);
		
		// dd($title->id);
		// dd($title);
		// $mondai->questions()->create([
		//     'question' => $request->question,
		//     'answer'=> $request->answer,
		//     ]);

		 return redirect (route('quizzes.createquestion',[
		   
			'user' => $user->id,
			'quiz' => $quiz->id
			]));
			
	}
	
	// delete quiz title
	public function destroy($id)
	{
		$quiz = \App\Quiz::find($id);
		$questions = $quiz->questions;
	
		if (\Auth::id() === $quiz->user_id) {
			$quiz->delete();
		}

		return redirect()->back();
	}
	
	

	
	//createquestion, storequestion and destroyquestion
	 public function createquestion($id)
	{
		if (\Auth::check()) {
		$user = \Auth::user();
		$quiz = Quiz::find($id);
		
	   return view('quizzes.createquestion', [
			'user' => $user,
			'quiz' => $quiz
			]);
	}else {
			return view('welcome');
	}
	}
	
	
	public function storequestion(Request $request)
	{
		$this->validate($request, [
			'question' => 'required|max:191',
			'answer' => 'required|max:191',
		]);
		$user = \Auth::user();
		$quiz = Quiz::find($request->get("id"));
		$quiz->questions()->create([
			'question' => $request->question,
			'answer'=> $request->answer,
			]);
		switch ($request->input('action')) {
		case 'complete':
			return view('quizzes.createconfirm',[
			    'user' => $user,
			    'quiz' => $quiz
			    ]); 
			break;

		case 'add_question':
					
			return redirect (route('quizzes.createquestion',[
		   
			'user' => $user->id,
			'quiz' => $quiz->id
			]));
			
			break;

		case 'add_quiz':
			 
		return view('quizzes.create', [
			'user' => $user,
			]);
			break;
	}
	}
	

	
	
	
	 public function destroyquestion(Request $request, $id)
	{
		$quiz = Quiz::find( $request->quizid);
		// dd($quiz->questions());
		
		$question = Question::find($id);
		
		
		//$quiz = $question->quiz();


		$have_question = $quiz->questions();
		
		// dd($have_question->count());
		
		if ($have_question->count() > 1)  {
			$question->delete();
			
		return redirect()->back();
	
		}else  {

				$question->delete();
				$quiz->delete();
				
		return redirect('mypage/{id}');		
				}

		
	}
	
	
	
	
	//edit-quiz function
	
		public function edit($id)
	{
		if (\Auth::check()) {
	   	$user = \Auth::user();
	   	$quiz = \App\Quiz::find($id);
		$question = \DB::table('quizzes')->join('questions', 'quizzes.id', '=', 'questions.q_id')->select('questions.question','questions.answer')->get();
			  $questions = $quiz->questions()->orderBy('created_at', 'asc') ->paginate(10)
			  ;
			if (\Auth::user()->id === $quiz->user_id){

		return view('quizzes.edit', [
			'quiz' => $quiz,
			'question' => $question,
			'questions' => $questions,
			'user' => $user
		]);}
			else{
				
				return redirect('mypage/{id}');
			}
				
			}
	   	}	
	
	
	
		public function update(Request $request, $id)
	{
		$this->validate($request, [
			'title' => 'required|max:191',
			// 'question' => 'required|max:191',
			// 'answer' => 'required|max:191',
		]);
		$quiz = Quiz::find($id);

		$quiz->update([
			'title' => $request->title,
		]);
		// $quiz->questions()->update([
		//     'question' => $request->question,
		//     'answer'=> $request->answer,
		//   ]);

		return redirect()->back();
	}
	
	
	//edit-question function
		  public function editquestion($id)
	{
	   $question = \App\Question::find($id);
	//   $question = \DB::table('quizzes')->join('questions', 'quizzes.id', '=', 'questions.q_id')->select('questions.question','questions.answer')->get();

		return view('quizzes.editquestion', [
			'question' => $question,
		]);
	}
	
		public function updatequestion(Request $request, $id)
	{
		$this->validate($request, [
			// 'title' => 'required|max:191',
			'question' => 'required|max:191',
			'answer' => 'required|max:191',
		]);
		$question = Question::find($id);
		$user = \Auth::user();
		$quizzes = $user->quizzes()->orderBy('created_at', 'asc')->paginate(10);
		
		$question->update([
			'question' => $request->question,
			'answer'=> $request->answer,
			
		   
			]);

		return view ('quizzes.editconfirm',[
		  
			'quizzes' => $quizzes,
			'question' => $question,
			'user' => $user
			]);
	}
	
	
	public function addquestion($id)
	{
		if (\Auth::check()) {
		$user = \Auth::user();
		$quiz = Quiz::find($id);
		
	   return view('quizzes.createquestion', [
			'user' => $user,
			'quiz' => $quiz
			]);
	}else {
			return view('welcome');
	}
	}
	
	
	// hidden page のcontroller　ここにつけました
	public function hiddenpage()
	{
	
		// $user = \Auth::user();
		
	   return view('users.hidden', [
			
			]);

	}
	
}