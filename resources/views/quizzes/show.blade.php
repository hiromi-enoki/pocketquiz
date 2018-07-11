<!--クイズ詳細ページ-->

@extends('layouts.app')

@section('content')
    <div class="row">
        <img src="{{ secure_asset("images/contents.jpg") }}" alt="contents pic">
        <div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-3">
            <div class="quiz">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                         <p class="quiz-title">{!! nl2br(e($quiz->title)) !!}のquestions一覧</p>
                    </div>
                    <div class="panel-body">
                       <!--trying to access questions.blade-->
                     
                       @foreach ($questions as $question)
                            <a href="{{ route('quizzes.questions', $question->q_id) }}">{{ $question->question }}</a>
                        @endforeach
                      
                    </div>
                    
                    </div>
                </div>
              
            </div>
              
        </div>

@endsection
