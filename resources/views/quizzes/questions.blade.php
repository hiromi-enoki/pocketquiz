@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="public/css/questions.css">
        <div class="wrapper" class="clearfix">

       
              <h1>くるくるさせるページ</h1>
        <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image:cheburashka.jpg">
                        <div class="inner">

                       @foreach ($questions as $question)
                            <p>{{ $question->question }}</p>
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
            <a href="#" class="square_btn">QUIT</a>
            <a href="#" class="square_btn">▶</a>
@endsection