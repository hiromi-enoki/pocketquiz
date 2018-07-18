@extends('layouts.app')

@section('content')
    <div class="row">
            <div class="image text-center">
                <img src="{{ secure_asset("images/contents.jpg") }}" alt="contents pic">
                <img src="{{ secure_asset("images/minna.jpg") }}" alt="minna pic">
                <br><br>
            <div>
             @if (count($quizzes) > 0)
                    <div class="text-center"> 
                        @include('quizzes.quizzes', ['quizzes' => $quizzes])
                        
                        
                        <div class="pull-right">
                            <aside class="col-xs-8">
                                <p>ランキングあとで入れるよ</p>
                            </aside>
                    
                        </div>  
                    </div>
                @endif
  
            </div>
            
             
       
    </div>
@endsection