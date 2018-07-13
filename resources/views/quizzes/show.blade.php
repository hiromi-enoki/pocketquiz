@extends('layouts.app')

@section('content')

<div class="text-center">
    <img src="{{ secure_asset("images/quizlist.jpg") }}" alt="quizlist pic">

<div class="row">
<div class="col-lg-12">
    <div class="quiz">
    <div class="panel panel-default">
    <div class="panel-heading text-center">
        <p class="question-title">QUIZ TITLE:<br><br> {!! nl2br(e($quiz->title)) !!}</p>
    </div>
    @foreach ($questions as $question)
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       
        <p>Question:<br><br>▼click▼<br><br>{!! nl2br(e($question->question)) !!}</p>
        
        </a>
        </h4>
         </div>
         <div id="collapseOne" class="panel-collapse collapse out" role="tabpanel"　aria-labelledby="headingOne">
         <div class="panel-body">
         
         <p>Answer:<br><br>{!! nl2br(e($question->answer)) !!}</p>
    
         </div>
         </div>
         </div>
    
         @endforeach

        </div>
        
    @endsection