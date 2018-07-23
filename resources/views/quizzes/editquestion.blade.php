@extends('layouts.app')

@section('content')

    <h1>「{!! nl2br(e($question->question)) !!}」を編集するよ</h1>

<div class="col-md-12">
    {!! Form::model($question, ['route' => ['quizzes.updatequestion', $question->id], 'method' => 'put']) !!}
        
        {!! Form::label('question', 'QUESTION:') !!}<br>
        {!! Form::textarea('question') !!}<br>
        
        {!! Form::label('answer', 'ANSWER:') !!}<br>
        {!! Form::textarea('answer') !!}<br>
        
        {!! Form::submit('UPDATE') !!}

    {!! Form::close() !!}
</div>


@endsection