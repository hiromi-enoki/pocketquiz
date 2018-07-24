
    @if (Auth::user()->is_favoriting($quiz->id))
    
        {!! Form::open(['route' => ['user.unfavorite', $quiz->id], 'method' => 'delete']) !!}
            {!! Form::submit('終わり＼(^o^)／', ['class' => "btn btn-danger btn-md"]) !!}
            
        {!! Form::close() !!}
        
    @else
        {!! Form::open(['route' => ['user.favorite', $quiz->id]]) !!}
            {!! Form::submit('終わったら押してね', ['class' => "btn btn-primary btn-md"]) !!}
        {!! Form::close() !!}
    @endif
    

  
  






