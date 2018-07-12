
<ul class="media-list">
@foreach ($quizzes as $quiz)
    <?php $user = $quiz->user; ?>
    <li class="media">
        <div class="media-body">
            <!--<div>-->
            <!--    {!! link_to_route('users.show', $user->nickname, ['id' => $user->id]) !!}-->
            <!--</div>-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="btn btn-warning"><a href="{{ route('quizzes.show', $quiz->id) }}">
                        <h3 class="panel-title">{!! nl2br(e($quiz->title)) !!}</h3>
                    </a></div>
                </div>
                <!--<div class="panel-body">-->
                <!--    <p>questions</p>-->
                <!--</div>-->
            </div>
            <div>
                @if (Auth::id() == $quiz->user_id)
                    {!! Form::open(['route' => ['quizzes.destroy', $quiz->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
        </div>
    </li>
@endforeach
</ul>
{!! $quizzes->render() !!}