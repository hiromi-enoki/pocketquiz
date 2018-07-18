@extends('layouts.app')

@section('content')

    <h1>{!! nl2br(e($quiz->title)) !!}の編集ページ</h1>

    {!! Form::model($quiz, ['route' => ['quizzes.update', $quiz->id], 'method' => 'put']) !!}

        {!! Form::label('title', 'TITLE:') !!}
        {!! Form::textarea('title') !!}<br>
        <!--{!! Form::label('question', 'QUESTION:') !!}-->
        <!--<input name="question" type="text" value = "{{$quiz->questions()->get()->toArray()[0]['question']}}" id="question"><br>-->
        
        <!--{!! Form::label('answer', 'ANSWER:') !!}-->
        <!--<input name="answer" type="text" value = "{{$quiz->questions()->get()->toArray()[0]['answer']}}" id="answer"><br>-->
        
        {!! Form::submit('UPDATE') !!}

    {!! Form::close() !!}

@endsection