
    @if (Auth::user()->is_favoriting($quiz->id))
    
        {!! Form::open(['route' => ['user.unfavorite', $quiz->id], 'method' => 'delete']) !!}
            {!! Form::submit('終わり＼(^o^)／', ['class' => "btn btn-danger btn-md", 'id' => 'btn']) !!}
            
        {!! Form::close() !!}
        
    @else
        {!! Form::open(['route' => ['user.favorite', $quiz->id]]) !!}
            {!! Form::submit('終わったら押してね', ['class' => "btn btn-primary btn-md"]) !!}
        {!! Form::close() !!}
    @endif
    

  
  

        <script type="text/javascript">
        
        
            $('#btn').on('click', function(e){
                e.preventDefault();
                alert('h');
            });


        $(function(){
            if(){

        var $ds = $(document).height(); // ページの高さを取得
        var $speed = 200; //スクロールのスピードを設定（ミリ秒）
        $("html,body").stop().animate({"scrollTop":$ds},$speed,function(){
        $("html,body").stop().animate({"scrollTop":0},$speed)
        })
        })
            
        }
        </script>
        
        









    <!--onsubmit="doSomething();return false;"-->
    <!--array(-->
    <!--        'type' => 'submit',-->
    <!--        'class'=> 'actions-line icon-trash',-->
    <!--        'onsubmit'=>'doSomething();return false'-->