@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="pull-right">
            <aside class="col-xs-8">
                <p>ランキングあとで入れるよ</p>
            </aside>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-3">
        <img src="{{ secure_asset("images/quizlist.jpg") }}" alt="quizlist pic">
         
        <div class="form-group form-inline">
            @if (count($quizzes) > 0)
                @include('quizzes.quizzes', ['quizzes' => $quizzes])
            @endif
        </div>
                
       
    </div>
@endsection