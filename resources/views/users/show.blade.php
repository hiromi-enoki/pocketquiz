@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="pull-right">
            <aside class="col-xs-8">
                <p>ランキングあとで入れるよ</p>
            </aside>
        </div>
        <div class="col-xs-8">
            @if (Auth::id() == $user->id)
                  {!! Form::open(['route' => 'quizzes.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('ADD Quiz Title', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif
                <div class="form-group form-inline">
            @if (count($quizzes) > 0)
                @include('quizzes.quizzes', ['quizzes' => $quizzes])
            @endif
                </div>
        </div>
            <!--<div>-->
            <!--    マイページ用！-->
            <!--</div>-->
    </div>
@endsection