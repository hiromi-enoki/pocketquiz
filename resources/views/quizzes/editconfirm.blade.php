@extends('layouts.app')

@section('content')
 <link rel="stylesheet" href="public/css/questions.css">
    <div class="addquestion">
        <div class="row">
        <div class="image text-center">
            <img src="{{ secure_asset("images/addnewquiz.jpg") }}" alt="new quiz pic">
        </div>
        <br><br>
            <h1>"{!! nl2br(e($question->question)) !!}"<br>is successfully updated！</h1>
            <div class="text-center">
                <div class="logo_position">
                <a href="{{ route('users.mypage', ['id' => $user->id]) }}" button type="button" class="pocketquiz_btn2 btn-lg">
                Edit other Quiz</a>
                
                <br><br><br>
                    <a href="/" class="pocketquiz_btn">Back to Home</a>
                </div>
            </div>

            </div>
        </div>
    </div>

@endsection