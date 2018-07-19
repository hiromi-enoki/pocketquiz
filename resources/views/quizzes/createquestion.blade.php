@extends('layouts.app')

@section('content')
 <link rel="stylesheet" href="public/css/questions.css">
    <div class="addquestion">
        <div class="row">
        <div class="image text-center">
            <img src="{{ secure_asset("images/addnewquiz.jpg") }}" alt="new quiz pic">
        </div>
        <br><br>
            <div class="text-left">
                @if (Auth::id() == $user->id)
                  {!! Form::open(['route' => 'quizzes.storequestion']) !!}
                      <div class="form-group">
                          {!! Form::hidden('id', $quiz->id) !!}
                          <img src="{{ secure_asset("images/question.jpg") }}" alt="q pic"><br>
                          {!! Form::textarea('question', old('question'), ['class' => 'form-control', 'rows' => '2']) !!}<br>
                          <img src="{{ secure_asset("images/answer.jpg") }}" alt="a pic"><br>
                          {!! Form::textarea('answer', old('answer'), ['class' => 'form-control', 'rows' => '2']) !!}<br>
                          <!--{!! Form::submit('ADD', ['class' => 'btn btn-info btn-block']) !!}-->
                       
                            <button class="btn btn-info btn-block" type="submit" name="action" value="complete">COMPLETE</button>
                            <button class="btn btn-info btn-block" type="submit" name="action" value="add_question">ADD another question/answer</button>
                            <!--<button class="btn btn-info btn-block" type="submit" name="action" value="add_quiz">ADD a new Quiz Title</button>-->
                      </div>
                  {!! Form::close() !!}
            @endif
            </div>
        </div>
    </div>

@endsection