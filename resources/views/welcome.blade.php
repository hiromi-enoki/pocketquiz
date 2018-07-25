@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="public/css/questions.css">
<div>
    <img src="{{ secure_asset("images/pocketquiz.bmp") }}" alt="pocketquiz pic" class="chuou"><br>
    <!--<img src="{{ secure_asset("images/welcome.bmp") }}" alt="welcome pic" class="chuou">-->
</div>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>
 
  <!-- Wrapper for slides -->

<div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ secure_asset("images/welcome.bmp") }}" alt="welcome">
    </div>
    <div class="item">
      <img src="{{ secure_asset("images/6square.bmp") }}" alt="what you can do">
    </div>
</div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    
     @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->nickname }}
    @else
    <br><br>   
        <div class="text-center">
            <br>
            {!! link_to_route('signup.get', 'Sign up', null, ['class' => 'btn btn-lg btn-warning']) !!}
            
            {!! link_to_route('login', 'Log in',null, ['class' => 'btn btn-lg btn-info']) !!}
            
        </div>
    
<!--<div>-->
<!--        <img src="{{ secure_asset("images/6square.bmp") }}" alt="what you can do" class="chuou">    -->
<!--</div>-->

    @endif
@endsection