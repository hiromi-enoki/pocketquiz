<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="/">PocketQuiz</a>ロゴボタンデザイン変更-->
<<<<<<< HEAD
            
                <a href="/" class="pocketquiz_btn">PocketQuiz</a>
            
=======
                <a href="/" class="pocketquiz_btn">PocketQuiz</a>
>>>>>>> origin/master
                <!--ロゴボタン-->
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <!--<li>{!! link_to_route('users.index', 'Users') !!}</li>-->
                    <form class="navbar-form navbar-left" role="search">
				    <div class="form-group">
				    	<input type="text" class="form-control" placeholder="検索キーワード">
	                </div>
			             <button type="submit" class="btn btn-default">GO</button>
		             </form>
                        <!--<li>{!! link_to_route('quizzes.create', 'Make a NEW QUIZ', auth()->user()->id) !!}</li>クリエイトボタンデザイン変更-->
                    <li>
                         <a href="{{ route('quizzes.create', auth()->user()->id) }}" class="makeanewquiz_btn">Make a NEW QUIZ</a>
                    </li>
                        <!--クリエイトボタン -->
                    <li>  
                        
<<<<<<< HEAD
                        <!--<li>{!! link_to_route('quizzes.create', 'Make a NEW QUIZ', auth()->user()->id) !!}</li>クリエイトボタンデザイン変更-->
                    <li>
                         <a href="{{ route('quizzes.create', auth()->user()->id) }}" class="makeanewquiz_btn">Make a NEW QUIZ</a>
                    </li>
                    <form class="navbar-form navbar-left" role="search" action="/search">
				        <div class="form-group">
				    	    <input name="keyword" type="text" class="form-control" placeholder="検索キーワード">
	                    </div>
			         <button type="submit" class="btn btn-default">GO</button>
		             </form>
                        <!--クリエイトボタン -->
                        
                        <!--<li class="dropdown">-->
                            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->nickname }} <span class="caret"></span></a>ユーザーボタン変更-->
                            <!--<a href="#" class="user_btn dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->nickname }}<span class="caret"></span></a>-->
                            <!--ユーザーボタン-->
                            
                 <!--    中身       -->
                 <!--           <ul class="dropdown-menu">-->
                 <!--               <form class="navbar-form navbar-left" role="search">-->
				             <!--   <div class="form-group">-->
				            	<!--<input type="text" class="form-control" placeholder="検索キーワード">-->
			              <!--  	</div>-->
			              <!--     	<button type="submit" class="btn btn-default">search</button>-->
		               <!--     	</form>-->
                 <!--               <li>{!! link_to_route('users.show', 'My profile', ['id' => Auth::id()]) !!}</li>-->
                                
                 <!--               <li role="separator" class="divider"></li>-->
                 <!--               <li>{!! link_to_route('logout.get', 'Logout') !!}</li>-->
                 <!--           </ul>-->
                 <!--中身-->
                 
                    <li>  
                        <div class="cp_cont">
                        <div class="cp_offcm01">
                        <input type="checkbox" id="cp_toggle01">
                        <label for="cp_toggle01"></label>
                        <div class="cp_menu">
                    <ul>
                <li>{!! link_to_route('quizzes.mypage', 'My profile', ['id' => Auth::id()]) !!}</li>
                <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                    </ul>
        </div>
    </div>
</div>
=======
                        <div class="cp_cont">
                        <div class="cp_offcm01">
                        <input type="checkbox" id="cp_toggle01">
                        <label for="cp_toggle01"><span></span></label>
                        <div class="cp_menu">
            <ul>
                <li>{!! link_to_route('users.mypage', 'My profile', ['id' => Auth::id()]) !!}</li>
                <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
            </ul>
            
            
            
        </div>
    </div>
</div>
</div>
>>>>>>> origin/master
</li>
</div> 
                        <!--</li>-->
                        
                    @else
                        <!--<li>{!! link_to_route('signup.get', 'Signup') !!}</li>-->
                        <!--<li>{!! link_to_route('login', 'Login') !!}</li>-->
                    @endif
                </ul>
                
            </div>
        </div>
    </nav>
</header>