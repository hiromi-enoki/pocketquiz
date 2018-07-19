@extends('layouts.app')
@section('content')

    <div class="image text-center">
        <img src="{{ secure_asset("images/myquizlist.jpg") }}" alt="myquizlist pic">
        <img src="{{ secure_asset("images/anata.jpg") }}" alt="anata pic">
        <br><br>
    </div>

<ul class="media-list">
     <div class="wrapper">
@foreach ($quizzes as $quiz)
    <?php $user = $quiz->user; ?>
    <li class="media">
        <div class="media-body">
            

            <div class="panel panel-warning">
                
                <div class="panel-heading text-center">
                  
                        <h3 class="panel-title">{!! nl2br(e($quiz->title)) !!}</h3>
                    
                    
                <div class="panel-body">
                    
                    <div class="btn-group" role="group">
                    @if (Auth::id() == $quiz->user_id)
                            <div class="btn btn-success btn-sm"><a href="{{ route('quizzes.edit', ['id' => $quiz->id]) }}">Edit</a></div>
                    @endif
                    @if (Auth::id() == $quiz->user_id)
                        {!! Form::open(['route' => ['quizzes.destroy', $quiz->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    @endif
                     
                    </div>
                    </div>
            </div>
                  </div>
            </div>

    </li>
@endforeach
</ul>
{!! $quizzes->render() !!}

@endsection