@extends('layouts.app')

@section('content')

    <div class="text-center">
        <img src="{{ secure_asset("images/editpage.jpg") }}" alt="login pic">
    </div>


    <h1>【{!! nl2br(e($question->question)) !!}】の問題編集ページ</h1>

    {!! Form::model($question, ['route' => ['quizzes.updatequestion', $question->id], 'method' => 'put']) !!}
        
        {!! Form::label('question', 'QUESTION:') !!}
        {!! Form::textarea('question') !!}<br>
        <div id='title'>
        {!! Form::label('answer', 'ANSWER:') !!}
        {!! Form::textarea('answer') !!}<br>
        </div>
        {!! Form::submit('UPDATE') !!}

    {!! Form::close() !!}

@endsection