<ul class="media-list">
    <div class="wrapper">
    <div class="row">
@foreach ($quizzes as $quiz)
    <?php $user = $quiz->user; ?>
    <div class="col-md-4">
    <ul class="media">
         <div class="media-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="btn btn-warning"><a href="{{ route('quizzes.show', $quiz->id) }}">
                        <h3 class="panel-title">
                                <p class="w-break">{!! nl2br(e($quiz->title)) !!}</p></h3></a>
                    </div>
                
                    <div>
                        made by {!! nl2br(e($user->nickname)) !!}
                        
                    
                        @if ($me->is_favoriting($quiz->id) == 1)    
                            <p><span class="glyphicon glyphicon-ok" style="color:#ff7777"></span> DONE</p>
                        @else
                            <p><span class="glyphicon glyphicon-remove" style="color:#99e1e5"></span> NOT YET</p>  
                        @endif
            
                    </div>
                    </div>
            </div>
        </div>
        
        
    </ul>
    </div>
    
@endforeach
{!! $quizzes->render() !!}
    </div>
    </div>
</ul>
