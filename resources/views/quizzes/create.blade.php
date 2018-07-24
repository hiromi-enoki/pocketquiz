@extends('layouts.app')

@section('content')
    <div class="addquestion">
        <div class="row">
            <div class="image text-center">
                <img src="{{ secure_asset("images/addnewquiz.jpg") }}" alt="new quiz pic">
            </div>
        <br><br>
            <div class="text-left">
                @if (Auth::id() == $user->id)
                  {!! Form::open(['route' => 'quizzes.store']) !!}
                      <div class="form-group">
                          <img src="{{ secure_asset("images/title.jpg") }}" alt="title pic">
                          {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2']) !!}<br>
                        
                          {!! Form::submit('このタイトルのQuizにQuestion/Answerを追加する', ['class' => 'btn btn-success btn-block']) !!}
                      </div>
                  
                @endif
            </div>
        </div>
    </div>

@endsection