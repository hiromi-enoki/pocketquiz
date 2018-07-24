
    @if (Auth::user()->is_favoriting($quiz->id))
    
        {!! Form::open(['route' => ['user.unfavorite', $quiz->id], 'method' => 'delete']) !!}
            {!! Form::submit('このクイズをもう一度やる', ['class' => "btn btn-danger btn-md"]) !!}
            
        {!! Form::close() !!}
        
    @else
        {!! Form::open(['route' => ['user.favorite', $quiz->id]]) !!}
            {!! Form::submit('おわったら押してね', ['class' => "btn btn-primary btn-md"]) !!}
        {!! Form::close() !!}
    @endif
    

  
  






