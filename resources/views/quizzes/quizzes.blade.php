<ul class="media-list">
    <div class="wrapper">
    <div class="row">
@foreach ($quizzes as $quiz)
    <?php $user = $quiz->user; ?>
    <div class="col-md-4">
    <ul class="media">
         <div class="media-body">
            <!--<div class="panel panel-default">-->
                <div class="panel-heading">
                    
                    
                    <a href="{{ route('quizzes.show', $quiz->id) }}">
                    
                    <div class="tag">
                        <span class="box-title"> made by {!! nl2br(e($user->nickname)) !!}</span>
                        <div class="btn btn-warning">
                        

                    <h3 class="panel-title">
                        <p class="w-break">{!! nl2br(e($quiz->title)) !!}</p></h3></a>
                    </div>

                    
                    </div>                        
                    
                        @if ($me->is_favoriting($quiz->id) == 1)    
                            <p><span class="glyphicon glyphicon-ok"></span> DONE</p>
                        @else
                            <p><span class="glyphicon glyphicon-remove"></span> NOT YET</p>  
                        @endif
            
                        
                        <!--<p><span class="glyphicon glyphicon-ok"></span> DONE</p>-->
                        <!--<button type="button" class="btn btn-default btn-sm">-->
                        <!--<span class="glyphicon glyphicon-ok-circle"></span> OK-->
                        <!--</button>-->
                        <!--@include('user_favorite.favorite_button', ['user' => $user])-->
                </div>
                    </a></div>
            </div>
        </div>
        
        
    </ul>
    </div>
    
@endforeach
{!! $quizzes->render() !!}
    </div>
    </div>
</ul>
