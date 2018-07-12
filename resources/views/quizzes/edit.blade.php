@extends('layouts.app')

@section('content')

    <h1>{!! nl2br(e($quiz->title)) !!}の編集ページ</h1>

    {!! Form::model($quiz, ['route' => ['quizzes.update', $quiz->id], 'method' => 'put']) !!}

        {!! Form::label('title', 'TITLE:') !!}
        {!! Form::text('title') !!}
        
        <!--{!! Form::label('question', 'QUESTION:') !!}-->
        <!--{!! Form::text('question') !!}-->
        
        <!--{!! Form::label('answer', 'ANSWER:') !!}-->
        <!--{!! Form::text('answer') !!}-->

        {!! Form::submit('UPDATE') !!}

    {!! Form::close() !!}

@endsection