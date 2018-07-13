@extends('layouts.app')

@section('content')

    <img src="{{ secure_asset("images/pocketquiz.jpg") }}" alt="pocketquiz pic">
    <img src="{{ secure_asset("images/welcome.png") }}" alt="welcome pic"　width="600" height="500">
    
    
     @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->nickname }}
    @else
    
        <div class="text-center">
            <br><br><br><br><br>
            {!! link_to_route('signup.get', 'Sign up', null, ['class' => 'btn btn-lg btn-warning']) !!}
            
            {!! link_to_route('login', 'Log in',null, ['class' => 'btn btn-lg btn-info']) !!}
            
        </div>
    </div>
    @endif
@endsection
