
<ul class="media-list">
     <div class="wrapper">
         
@foreach ($quizzes as $quiz)
    <?php $user = $quiz->user; ?>
    <li class="media">
        <div class="media-body">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="btn btn-warning"><a href="{{ route('quizzes.show', $quiz->id) }}">
                        <h3 class="panel-title">
                                <p class="w-break">{!! nl2br(e($quiz->title)) !!}</p></h3>
                </a></div>

                    
                    <div>
                        
                        made by {!! nl2br(e($user->nickname)) !!}
                        @include('user_favorite.favorite_button', ['user' => $user])
                        
                        
                    </div>
                    
            </div>
                <!--<div class="panel-body">-->
                <!--    <p>questions</p>-->
                <!--</div>-->
            </div>

    </li>
@endforeach
</ul>
{!! $quizzes->render() !!}
