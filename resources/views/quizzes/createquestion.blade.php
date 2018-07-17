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
                  {!! Form::open(['route' => 'quizzes.storequestion']) !!}
                      <div class="form-group">
                          {!! Form::hidden('id', $quiz->id) !!}
                          <p>question</p>
                          {!! Form::textarea('question', old('question'), ['class' => 'form-control', 'rows' => '2']) !!}<br>
                             <p>answer</p>
                          {!! Form::textarea('answer', old('answer'), ['class' => 'form-control', 'rows' => '2']) !!}<br>
                          {!! Form::submit('ADD', ['class' => 'btn btn-info btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif
            </div>
        </div>
    </div>

@endsection