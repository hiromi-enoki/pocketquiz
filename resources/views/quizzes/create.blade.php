@extends('layouts.app')

@section('content')
    <div class="addquestion">
        <div class="row">
            <div class="text-left">
                @if (Auth::id() == $user->id)
                  {!! Form::open(['route' => 'quizzes.store']) !!}
                      <div class="form-group">
                          <p>QUIZ CATEGORY</p>
                          {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2']) !!}
                          <!--{!! Form::submit('ADD Quiz Title', ['class' => 'btn btn-primary btn-block']) !!}-->
                          <p>QUESTIONs</p>
                          {!! Form::textarea('question', old('question'), ['class' => 'form-control', 'rows' => '2']) !!}
                          <!--{!! Form::submit('ADD Your question', ['class' => 'btn btn-primary btn-block']) !!}-->
                           <p>ANSWERs</p>
                          {!! Form::textarea('answer', old('answer'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('ADD Your answer', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif
            </div>
        </div>
    </div>

@endsection