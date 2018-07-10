@if (count($users) > 0)
<ul class="media-list">
@foreach ($users as $user)
    <li class="media">

        <div class="media-body">
            <div>
                {{ $user->nickname }}
            </div>
                 <div> @if (Auth::id() == $user->id)
                  {!! Form::open(['route' => 'quizzes.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2']) !!}
                          <!--{!! Form::submit('ADD Quiz Title', ['class' => 'btn btn-primary btn-block']) !!}-->
                          {!! Form::textarea('question', old('question'), ['class' => 'form-control', 'rows' => '2']) !!}
                          <!--{!! Form::submit('ADD Your question', ['class' => 'btn btn-primary btn-block']) !!}-->
                          {!! Form::textarea('answer', old('answer'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('ADD Your answer', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif</div>
            <div>
                <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $users->render() !!}
@endif