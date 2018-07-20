@extends('layouts.app')

@section('content')

        
            <div class="image text-center">
                <img src="{{ secure_asset("images/contents.jpg") }}" alt="contents pic">
                <img src="{{ secure_asset("images/minna.jpg") }}" alt="minna pic">
                <br><br>
            
            <div>
                
            
             @if (count($quizzes) > 0)
                    <div class="text-center"> 
                        @include('quizzes.quizzes', ['quizzes' => $quizzes, 'me' => $me])
                            
                    
                          
                    </div>
                </div>
            @endif

@endsection







