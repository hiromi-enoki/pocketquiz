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
                          <!--{!! Form::submit('ADD Quiz Title', ['class' => 'btn btn-primary btn-block']) !!}-->
                          
                      <form class="form-inline">
                          <div class="form-group col-sm-6">
                           <p>QUESTIONs</p>
                          {!! Form::textarea('question', old('question'), ['class' => 'form-control', 'rows' => '3']) !!}
                          </div>
                          <!--{!! Form::submit('ADD Your question', ['class' => 'btn btn-primary btn-block']) !!}-->
                           <div class="form-group col-sm-6">
                           <p>ANSWERs</p>
                          {!! Form::textarea('answer', old('answer'), ['class' => 'form-control', 'rows' => '3']) !!}
                          </div>
                      </form>
                          {!! Form::submit('ADD Your answer', ['class' => 'btn btn-primary btn-block']) !!}
                        {!! Form::close() !!}  
                      </div>
                  
            @endif
            </div>
        </div>
    </div>

@endsection