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
                                <p class="w-break">{!! nl2br(e($quiz->title)) !!}</p></h3>
                    </div>
                    <div>
                        made by {!! nl2br(e($user->nickname)) !!}
                        @include('user_favorite.favorite_button', ['user' => $user])
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
