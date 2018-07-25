@extends('layouts.app')

@section('content')

<div>
    <img src="{{ secure_asset("images/pocketquiz.bmp") }}" alt="pocketquiz pic" class="chuou"><br>
    <img src="{{ secure_asset("images/welcome.bmp") }}" alt="welcome pic" class="chuou">
</div>

    
     @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->nickname }}
    @else
    
        <div class="text-center">
            <br>
            {!! link_to_route('signup.get', 'Sign up', null, ['class' => 'btn btn-lg btn-warning']) !!}
            
            <a href="{{URL::to('/hidden')}}"><img src="{{ secure_asset("images/nikukyu.jpg")}}" alt="nikukyu"></a>
            
            {!! link_to_route('login', 'Log in',null, ['class' => 'btn btn-lg btn-info']) !!}
            
        </div>
<br><br>       
<div>
        <img src="{{ secure_asset("images/6square.bmp") }}" alt="what you can do" class="chuou">    
</div>
    @endif
@endsection