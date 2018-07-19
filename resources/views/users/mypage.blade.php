@extends('layouts.app')
@section('content')
<div class="row">
    <div class="image text-center">
        <img src="{{ secure_asset("images/myquizlist.jpg") }}" alt="myquizlist pic">
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

<div class="row">
    <table class="table">
        <table class="table table-striped">
    <tr>
        <th>Title</th>
        <th>Made by</th>
        <th>Done Time</th>
        
    </tr>
        @foreach ($favoritings as $favoriting)           
        
        <tr>
             <td><a href="{{ route('quizzes.show', $favoriting->id) }}">
                 {!! nl2br(e($favoriting->title)) !!}</a>
                 </td>
                 <td>
                 {!! nl2br(e($favoriting->user->nickname)) !!}
                 </td>
                 <td>
                 {!! nl2br(e($favoriting->updated_at)) !!}
                 </td>
        </tr>
        @endforeach
    
</table>
</div>
@endsection