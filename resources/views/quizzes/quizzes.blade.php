
<ul class="media-list">
     <div class="wrapper">
@foreach ($quizzes as $quiz)
    <?php $user = $quiz->user; ?>
    <li class="media">
        <div class="media-body">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="btn btn-warning"><a href="{{ route('quizzes.show', $quiz->id) }}">
                        <h3 class="panel-title">{!! nl2br(e($quiz->title)) !!}</h3>
                    </a></div>
                <div class="panel-body button-inline">
                    @if (Auth::id() == $quiz->user_id)
                        {!! Form::open(['route' => ['quizzes.destroy', $quiz->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    @endif
                     @if (Auth::id() == $quiz->user_id)
                            <div class="btn btn-success btn-xs"><a href="{{ route('quizzes.edit', ['id' => $quiz->id]) }}">Edit</a></div>
                    @endif
                    
                    <div>
                        made by {!! nl2br(e($user->nickname)) !!}
                    </div>
                    
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