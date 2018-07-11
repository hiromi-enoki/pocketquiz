@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="public/css/questions.css">
        <div class="wrapper" class="clearfix">

       
              <h1>くるくるさせるページ</h1>
              <h1>{!! nl2br(e($quiz->title)) !!}のquestions一覧</h1>
              <!--確認用-->
              <h2>quizzes.question</h2>
        <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image:{{ secure_asset("images/omote.bmp") }}">
                        <div class="inner">

                       @foreach ($questions as $question)
                            <p>{{ $question->question }}</p>
                        @endforeach
                   
                
                   

                 </div>
                    </div>
                    <div class="back" style="background-image:{{ secure_asset("images/ura.bmp") }}">
                        <div class="inner">
                          <p>Q1の答え</p>
                        </div>
                    </div>
                </div>
                   <div>
            <a href="#" class="square_btn">◀</a>
            <a href="#" class="square_btn">QUIT</a>
            <a href="#" class="square_btn">▶</a>
            </div>
            </div>
         
@endsection