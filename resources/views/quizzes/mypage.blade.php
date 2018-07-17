@extends('layouts.app')

@section('content')
<link href="public/css/questions.css" rel="stylesheet" type="text/css">

<div class="row">
    <div class="image text-center">
        <img src="{{ secure_asset("images/myquizlist.jpg") }}" alt="myquizlist pic">
    </div>

    @foreach ($quizzes as $quiz)
    <div class="text-center">
    <div class="panel panel-default">
    <div class="panel-heading">
        <div class="btn btn-warning"><a href="{{ route('quizzes.show', $quiz->id) }}">
            <h3 class="panel-title">{!! nl2br(e($quiz->title)) !!}</h3></a>
        </div>
    
    <div>
    
        @if (count($quizzes) > 0)
        <div class="text-center"> 
            <div class="panel-body button-inline">
            
                @if (Auth::id() == $quiz->user_id)
                {!! Form::open(['route' => ['quizzes.destroy', $quiz->id], 'method' => 'delete']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                {!! Form::close() !!}
                @endif
        
                @if (Auth::id() == $quiz->user_id)
                <div class="btn btn-success btn-xs"><a href="{{ route('quizzes.edit', ['id' => $quiz->id]) }}">Edit</a></div>
                @endif
            </div>
        </div>
        @endif
    @endforeach
    </div>
            <div>
            made by {!! nl2br(e($user->nickname)) !!}
            </div>
    </div>
    </div>
    </div>
</div>
    @endsection