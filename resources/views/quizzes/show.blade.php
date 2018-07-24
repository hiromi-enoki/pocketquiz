@extends('layouts.app')

@section('content')

<div class="text-center">
    <img src="{{ secure_asset("images/quizlist.jpg") }}" alt="quizlist pic">

<div class="row">
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
                                <span class="glyphicon glyphicon-question-sign text-info" style="color:#f9e75e">
                                </span> {!! nl2br(e($question->question)) !!}
                                <span class="glyphicon glyphicon-chevron-down pull-right" ></span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne{{$i}}" class="panel-collapse collapse out" role="tabpanel"aria-labelledby="headingOne">
                        <div class="panel-body">
                            <span class="glyphicon glyphicon-pencil text-info" style="color:#0d7e83"></span> {!! nl2br(e($question->answer)) !!}
                        </div>
                    </div>
        </div>
        <?php $i++ ?>
            @endforeach
        </div>
        <div class=favobutton>
            
        @if (Auth::user()->is_favoriting($quiz->id))
        {!! Form::open(['route' => ['user.unfavorite', $quiz->id], 'method' => 'delete']) !!}
            {!! Form::submit('Done!!', ['class' => "btn btn-danger btn-lg"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $quiz->id]]) !!}
            {!! Form::submit('終わったら押してね', ['class' => "btn btn-primary btn-lg"]) !!}
        {!! Form::close() !!}
        </div>
    @endif
    <br></br>
    <div class="btn pocketquiz_btn btn-md"><a href="/">Homeに戻る</a></div>
        


</div>
</div>
</div>        
   
  
   @endsection