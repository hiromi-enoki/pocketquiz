@extends('layouts.app')

@section('content')
        <div class="wrapper" class="clearfix">

       
              <h1>{!! nl2br(e($quiz->title)) !!}のquestions一覧</h1>
        <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image:cheburashka.jpg">
                        <div class="inner">
                            <p>Question1</p>
                 @foreach ($questions as $question)
                            <a href="{{ route('quizzes.questions', $question->id) }}">{{ $question->question }}</a>
                        @endforeach
                 </div>
                    </div>
                    <div class="back" style="background-image: /pocketquiz/Screenshot_20180520-201405.png">
                        <div class="inner">
                          <p>Q1の答え</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <a href="#" class="square_btn">◀</a>
            <a href="/" class="square_btn">QUIT</a>
            <a href="#" class="square_btn">▶</a>

        
@endsection
                           