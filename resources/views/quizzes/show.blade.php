@extends('layouts.app')

@section('content')

<div class="text-center">
    <img src="{{ secure_asset("images/quizlist.jpg") }}" alt="quizlist pic">
    
    
   
<div class="row">
     
    @if (Auth::user()->is_favoriting($quiz->id))
    
        <div class="btn pocketquiz_btn btn-md"><a href="/">Home</a></div>
        
   @endif
<br></br>
<div class="col-lg-12">
    <div class="quiz">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <p class="question-title">◆QUIZ TITLE◆ <p>{!! nl2br(e($quiz->title)) !!}</p></p>
            </div>
            <?php $i = 1?>

            @foreach ($questions as $question)
                <div class="panel-group" id="accordion{{$i}}" role="tablist" aria-multiselectable="true">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion{{$i}}" href="#collapseOne{{$i}}" aria-expanded="true" aria-controls="collapseOne">
                                <span class="glyphicon glyphicon-question-sign text-info"></span>{!! nl2br(e($question->question)) !!}
                                <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne{{$i}}" class="panel-collapse collapse out" role="tabpanel"aria-labelledby="headingOne">
                        <div class="panel-body">
                            <span class="glyphicon glyphicon-pencil text-info"></span>{!! nl2br(e($question->answer)) !!}
                        </div>
                    </div>
        </div>
        <?php $i++ ?>
            @endforeach
        </div>
        
        @include('user_favorite.favorite_button', ['quiz' => $quiz])
    <br></br>
    <div class="btn pocketquiz_btn btn-md"><a href="/">Home</a></div>
        


</div>
</div>
</div>        
   
  
   @endsection