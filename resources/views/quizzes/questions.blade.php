@extends('layouts.app')

@section('content')
<!--<link rel="stylesheet" href="public/css/questions.css">-->
              <!--        <h1>くるくるさせるページ</h1>-->
              <!--<h2>quizzes.question</h2>-->
        <div class="wrapper" class="clearfix">
        <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <!--クイズの問題-->
                    <div class="front" style=.bgImage { background-image: url(public_path('images/omote.jpg')); }>
                        <div class="inner">
                           @foreach ($questions as $question)
                                <p>{{ $question->question }}</p>
                           @endforeach
                         </div>
                    </div>
                    <!--クイズの答え-->
                    <div class="back" style=.bgImage { background-image: url(public_path('images/ura.jpg')); }>
                        <div class="inner">
                            @foreach ($answers as $answer)
                                <p>{{ $answer->answer }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
                 <div class="wrapper">   
                    <div class="button_wrapper">
                        <a href="#" class="square_btn">◀</a>
                        <a href="/" class="square_btn">QUIT</a>
                        <a href="#" class="square_btn">▶</a>
                    </div>
                </div>
        </div>    
         
@endsection