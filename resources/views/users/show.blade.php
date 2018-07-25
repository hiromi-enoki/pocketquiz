@extends('layouts.app')

@section('content')

        
            <div class="image text-center">
                <img src="{{ secure_asset("images/minna.jpg") }}" alt="contents and minna pic">
                <br>
            <div>
                
            
             @if (count($quizzes) > 0)
                    <div class="text-center"> 

                        @include('quizzes.quizzes', ['quizzes' => $quizzes, 'me' => $me])
                            
                    
                          
                    </div>
                </div>
            @endif

@endsection







