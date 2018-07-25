<header>
    <div class="hamburger2">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">

          <div class="navbar-header">      
                <div class="logo_position">
                <a href="/" class="pocketquiz_btn">PocketQuiz</a>
                </div>
            @if (Auth::check())
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!--<a class="navbar-brand" href="/">PocketQuiz</a>旧ロゴボタン-->
            
                <!--ロゴボタン-->
            
            </div>
               <?php $user = \Auth::user(); ?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                
                 
                        <!--検索機能-->
                    <form class="navbar-form navbar-left" role="search"　method="get" action="/search">
				    <div class="form-group">
				    	<input name='keyword' type="text" class="form-control" placeholder="search by keywords">
	                </div>
			             <button type="submit" class="btn btn-default">GO</button>
		             </form>
                 
                        <!--<li>{!! link_to_route('quizzes.create', 'Make a NEW QUIZ', auth()->user()->id) !!}</li>旧クリエイトボタン-->
                        <!--<a href="{{ route('quizzes.create', auth()->user()->id) }}" class="makeanewquiz_btn">Make a NEW QUIZ</a>違う表示法-->
                        <li class="visible-xs">{!! link_to_route('users.mypage', $user->nickname . ' ’s My Page', ['id' => Auth::id()], ['class' => 'blue_btn']) !!}</li>
                        <li>{!! link_to_route('quizzes.create', 'ADD a New QUIZ', ['id' => Auth::id()], ['class' => 'blue_btn']) !!}</li>
                        <li class="visible-sm visible-md visible-lg">  <div class="logo_position"> Hi,<br>{{ Auth::user()->nickname }}</div></li>
                        <!--クリエイトボタン -->
                        <li class="visible-xs">{!! link_to_route('logout.get', 'Logout', null, ['class' => 'blue_btn']) !!}</li>

         
                    </ul>
            
            </div>
                    <!--</li>-->
                            
                @else
                        <!--<li>{!! link_to_route('signup.get', 'Signup') !!}</li>-->
                        <!--<li>{!! link_to_route('login', 'Login') !!}</li>-->
                @endif
</div>

    
    </nav>
</header>