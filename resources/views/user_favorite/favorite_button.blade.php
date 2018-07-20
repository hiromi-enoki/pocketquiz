<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js"></script>
<script src="jquery.utility-kit.js"></script><!-- または jquery.keep-position.js -->
<script>
/*global jQuery*/(function() {/*global$*/('form').keepPosition();
  
});
</script>

    @if (Auth::user()->is_favoriting($quiz->id))
        {!! Form::open(['route' => ['user.unfavorite', $quiz->id], 'method' => 'delete']) !!}
            {!! Form::submit('Done!!', ['class' => "btn btn-danger btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $quiz->id]]) !!}
            {!! Form::submit('終わったら押してね', ['class' => "btn btn-primary btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
    
    <!--onsubmit="doSomething();return false;"-->
    <!--array(-->
    <!--        'type' => 'submit',-->
    <!--        'class'=> 'actions-line icon-trash',-->
    <!--        'onsubmit'=>'doSomething();return false'-->