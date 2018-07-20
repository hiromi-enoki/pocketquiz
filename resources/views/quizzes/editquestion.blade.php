@extends('layouts.app')

@section('content')

    <h1>「{!! nl2br(e($question->question)) !!}」を編集するよ</h1>

    {!! Form::model($question, ['route' => ['quizzes.updatequestion', $question->id], 'method' => 'put']) !!}
        
        {!! Form::label('question', 'QUESTION:') !!}
        {!! Form::textarea('question') !!}<br>
        
        {!! Form::label('answer', 'ANSWER:') !!}
        {!! Form::textarea('answer') !!}<br>
        
        {!! Form::submit('UPDATE') !!}

    {!! Form::close() !!}

@endsection