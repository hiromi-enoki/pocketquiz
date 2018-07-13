<!--クイズ詳細ページ-->

@extends('layouts.app')

@section('content')
            <!--確認用-->
            <!--  <h2>quizzes.show</h2>-->
    <div class="row">
        <div class="image text-center">
        <img src="{{ secure_asset("images/quizlist.jpg") }}" alt="quizlist pic"></div>
        <div class="col-lg-12">
            <div class="quiz">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                         <p class="question-title">QUIZ TITLE: {!! nl2br(e($quiz->title)) !!}</p>
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
                            
                        
                            @foreach ($quizsets as $quizset)
                            <tr>
                              <td>
                            <a href="{{ route('quizzes.questions', $quizset->q_id) }}">{!! nl2br(e($quizset->question)) !!}</a>
                                </td>
                                 <td>
                            <a href="{{ route('quizzes.questions', $quizset->q_id) }}">{!! nl2br(e($quizset->answer)) !!}</a>
                                </td>
                            
                            </tr>
                            @endforeach
                            
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