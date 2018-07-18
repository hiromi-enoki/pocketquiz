@extends('layouts.app')

@section('content')

    <h1>{!! nl2br(e($question->question)) !!}の問題編集ページ</h1>

    {!! Form::model($question, ['route' => ['quizzes.updatequestion', $question->id], 'method' => 'put']) !!}

        {!! Form::label('title', 'TITLE:') !!}
        <!--{!! Form::text('title') !!}<br>-->
        
        {!! Form::label('question', 'QUESTION:') !!}
        <input name="question" type="text" value = " " id="question"><br>
        
        {!! Form::label('answer', 'ANSWER:') !!}
        <input name="answer" type="text" value = " " id="answer"><br>
        
        {!! Form::submit('UPDATE') !!}

    {!! Form::close() !!}

@endsection