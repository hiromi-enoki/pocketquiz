@extends('layouts.app')

@section('content')
    <div class="text-center">
        <img src="{{ secure_asset("images/signup.jpg") }}" alt="sign up pic">
        <!--<h1>Sign up</h1>-->
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('nickname', 'Nickname') !!}
                    {!! Form::text('nickname', old('nickname'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Sign up', ['class' => 'btn btn-warning btn-block']) !!}
            {!! Form::close() !!}
            <p>Done before? {!! link_to_route('login', 'log in') !!}</p>
        </div>
    </div>
    
@endsection