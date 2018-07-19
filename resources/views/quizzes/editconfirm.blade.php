@extends('layouts.app')

@section('content')
 <link rel="stylesheet" href="public/css/questions.css">
    <div class="addquestion">
        <div class="row">
        <div class="image text-center">
            <img src="{{ secure_asset("images/addnewquiz.jpg") }}" alt="new quiz pic">
        </div>
        <br><br>
            <h1>"{!! nl2br(e($question->question)) !!}"<br>のQuestion/AnswerがEditされました！</h1>
            <div class="text-center">
            <div class="btn btn-success btn-lg"><a href="{{ route('users.mypage', ['id' => $user->id]) }}">ほかのタイトルのQuizをEditする</a></div><br><br>
            <div class="btn pocketquiz_btn btn-md"><a href="/">Homeに戻る</a></div>

            </div>
        </div>
    </div>

@endsection