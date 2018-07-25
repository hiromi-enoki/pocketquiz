
    @if (Auth::user()->is_favoriting($quiz->id))
    
        {!! Form::open(['route' => ['user.unfavorite', $quiz->id], 'method' => 'delete']) !!}
            {!! Form::submit('Try Again!', ['class' => "btn btn-danger btn-md"]) !!}
            
        {!! Form::close() !!}
        
    @else
        {!! Form::open(['route' => ['user.favorite', $quiz->id]]) !!}
            {!! Form::submit('Complete this Quiz', ['class' => "btn btn-primary btn-md"]) !!}
        {!! Form::close() !!}
    @endif
    

  
  






