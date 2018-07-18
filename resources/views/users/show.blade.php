@extends('layouts.app')

@section('content')

    <div class="row">
            
            <div class="image text-center">
                <img src="{{ secure_asset("images/contents.jpg") }}" alt="contents pic">
            
            <div>
                
            </aside>
             @if (count($quizzes) > 0)
                    <div class="text-center"> 
                        @include('quizzes.quizzes', ['quizzes' => $quizzes])
                        
                        
                            
                            
                                <p>ランキングあとで入れるよ</p>
                                
                            </aside>
                    
                          
                    </div>
                @endif
                
  
            </div>
            
       
    </div>
    
@endsection







