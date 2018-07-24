@extends('layouts.app')

@section('content')
 <link rel="stylesheet" href="public/css/questions.css">
    <div class="addquestion">
        <div class="row">
        <div class="image text-center">
            <img src="{{ secure_asset("images/addnewquiz.jpg") }}" alt="new quiz pic">
        </div>
        <br><br>
            <h1>「{!! nl2br(e($quiz->title)) !!}」<br>が追加されました！</h1>
            <div class="text-center">
            <a href="{{ route('quizzes.create', ['id' => $quiz->id]) }}" button type="button" class="btn btn-success btn-lg">
                他のTitleのQuizを追加する</a>
                <br><br>
            <div class="logo_position">
                <a href="/" class="pocketquiz_btn">Back to Home</a>
            </div>
            </div>
        </div>
    </div>

@endsection