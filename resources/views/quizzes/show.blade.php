<!--クイズ詳細ページ-->

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-3">
            <div class="quiz">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                         <p class="quiz-title">{!! nl2br(e($quiz->title)) !!}のクイズ一覧</p>
                    </div>
                    <div class="panel-body">
                       <div class="btn btn-default"><a href="#">
                        <h3 class="panel-title"> <div>questions</div>
                    </div>
                       
                    </div>
                </div>
            </div>
        </div>

@endsection
