@extends('layouts.app')

@section('content')
    <div class="row">
        <!--<div class="pull-right">-->
        <!--    <aside class="col-xs-8">-->
        <!--        <p>ランキングあとで入れるよ</p>-->
        <!--    </aside>-->
        <!--</div>-->
        
            <div class="image text-center">
                <img src="{{ secure_asset("images/quizlist.jpg") }}" alt="quizlist pic">
            
            <!--<div class="row">-->
                
                @if (count($quizzes) > 0)
                    <div class="text-center"> 
                        @include('quizzes.quizzes', ['quizzes' => $quizzes])
                    </div>
                @endif
                <!--</div>    -->
            </div>
        </div>        
       
    </div>
@endsection