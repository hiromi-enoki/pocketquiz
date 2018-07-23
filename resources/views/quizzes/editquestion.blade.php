@extends('layouts.app')

@section('content')

    <div class="text-center">
        <img src="{{ secure_asset("images/editpage.jpg") }}" alt="login pic">
    </div>


    <h1>【{!! nl2br(e($question->question)) !!}】の問題編集ページ</h1>

<div class="col-md-12">
    {!! Form::model($question, ['route' => ['quizzes.updatequestion', $question->id], 'method' => 'put']) !!}
        
        {!! Form::label('question', 'QUESTION:') !!}<br>
        {!! Form::textarea('question') !!}<br>
        
        {!! Form::label('answer', 'ANSWER:') !!}<br>
        {!! Form::textarea('answer') !!}<br>
        </div>
        {!! Form::submit('UPDATE') !!}

    {!! Form::close() !!}
</div>


@endsection