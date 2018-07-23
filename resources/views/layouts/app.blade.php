<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/questions.css">

        <title>PocketQuiz</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="{{ secure_asset('css/questions.css') }}">
        
        
        
        
    </head>
    
        @include('commons.navbar')
      
      
            <div class="hamburger">
                
                            <!--<li class="visible-xs">{!! link_to_route('users.mypage', 'My profile', ['id' => Auth::id()], ['class' => 'blue_btn']) !!}</li>-->
                            <!--<li class="visible-xs">{!! link_to_route('logout.get', 'Logout', null, ['class' => 'blue_btn']) !!}</li>-->
                        
                        @if (Auth::check())
                        <div class="hidden-xs">
                            <div class="cp_cont">
                            <div class="cp_offcm01">
                            <input type="checkbox" id="cp_toggle01">
                            <label for="cp_toggle01"></label>
                                <div class="cp_menu">
                                    <ul>
                                        <li>{!! link_to_route('users.mypage', 'My profile', ['id' => Auth::id()]) !!}</li>
                                        <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        @endif
            </div> 
      
      
      
        <div class="container">
            @include('commons.error_messages')

            @yield('content')
        </div>
       @include('commons.footer')
    </body>
     
</html>