@extends('layouts.app')

@section('content')
 <link rel="stylesheet" href="public/css/questions.css">
    <div class="addquestion">
        <div class="row">
        <div class="image text-center">
            <img src="{{ secure_asset("images/addnewquiz.jpg") }}" alt="new quiz pic">
        </div>
        <br><br>
            <h1>"{!! nl2br(e($quiz->title)) !!}"<br>というタイトルのQuizが追加されました！</h1>
            <div class="text-center">
            <div class="btn btn-success btn-lg"><a href="{{ route('quizzes.create', ['id' => $quiz->id]) }}">ほかのタイトルのQuizを追加する</a></div><br><br>
            <div class="btn pocketquiz_btn btn-md"><a href="/">Homeに戻る</a></div>

            </div>
        </div>
    </div>

@endsection