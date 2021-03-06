@extends('layouts.app')

@section('content')
    <div class="text-center">
        <img src="{{ secure_asset("images/login.jpg") }}" alt="login pic">
        <!--<h1>Log in</h1>-->
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('nickname', 'Nickname') !!}
                    {!! Form::text('nickname', old('nickname'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-info btn-block']) !!}
            {!! Form::close() !!}

            <p>New user? <font color="#0000ff">{!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
    </div>
@endsection