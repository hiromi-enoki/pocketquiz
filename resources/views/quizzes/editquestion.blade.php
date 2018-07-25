@extends('layouts.app')

@section('content')

    <div class="text-center">
        <img src="{{ secure_asset("images/editpage.jpg") }}" alt="login pic">
    </div>

<div class="col-md-12">
    {!! Form::model($question, ['route' => ['quizzes.updatequestion', $question->id], 'method' => 'put']) !!}
        
       <th scope="col"><h2>Question</h2></th>
        {!! Form::textarea('question') !!}<br>
        <div id='title'>
      <th scope="col"><h2>Answer</h2></th>
        {!! Form::textarea('answer') !!}<br>
        </div>
        {!! Form::submit('UPDATE this Q & A', ['class' => 'btn btn-warning btn-block']) !!}

    {!! Form::close() !!}
</div>


@endsection