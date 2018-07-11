@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="pull-right">
            <aside class="col-xs-8">
                <p>ランキングあとで入れるよ</p>
            </aside>
        </div>
        <div class="col-xs-8">

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