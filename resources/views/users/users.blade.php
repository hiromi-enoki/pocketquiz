@if (count($users) > 0)
<ul class="media-list">
@foreach ($users as $user)
    <li class="media">

        <div class="media-body">
            <div>
                {{ $user->nickname }}
            </div>
              
            <div>
                <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $users->render() !!}
@endif