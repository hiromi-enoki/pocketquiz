<!--クイズ詳細ページ-->

@extends('layouts.app')

@section('content')
            <!--確認用-->
              <h2>quizzes.show</h2>
    <div class="row">
        <img src="{{ secure_asset("images/contents.jpg") }}" alt="contents pic">
        <div class="col-lg-12">
            <div class="quiz">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                         <p class="question-title">QUIZ CATEGORY: {!! nl2br(e($quiz->title)) !!}</p>
                    </div>
                </div>
                    <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">Question</th>
                              <th scope="col">Answer</th>
                            </tr>
                          </thead>
                          
                          
                          <tbody>
                            
                        
                            <tr>
                              <td>@foreach ($questions as $question)
                            <a href="{{ route('quizzes.questions', $question->q_id) }}">{{ $question->question }}</a>
                            @endforeach
                                </td>
                            
                                 <td>@foreach ($answers as $answer)
                            <a href="{{ route('quizzes.questions', $answer->q_id) }}">{{ $answer->answer }}</a>
                            @endforeach
                                </td>
                            
                            </tr>
                            
                    </table>
                    
                    <!--<div class="panel-body">-->
                       <!--trying to access questions.blade-->
                     
                    <!--    @foreach ($questions as $question)-->
                    <!--        <a href="{{ route('quizzes.questions', $question->q_id) }}">{{ $question->question }}</a>-->
                    <!--    @endforeach-->
                      
                    </div>
                    
                    </div>
                
              
            </div>
    @endsection
        </div>