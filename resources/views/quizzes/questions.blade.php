<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Quiz</title>
        <link rel="stylesheet" href="hiromin.css"> 

</head>  
    
    <body>
        <!--ここからヘッダー-->
        <div class="wrapper" class="clearfix">

       
              <h1>{!! nl2br(e($quiz->title)) !!}のquestions一覧</h1>
        <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image:cheburashka.jpg">
                        <div class="inner">
                            <p>Question1</p>
                 <span>税の問題が<br>ここに入ります</span>
                 </div>
                    </div>
                    <div class="back" style="background-image: /pocketquiz/Screenshot_20180520-201405.png">
                        <div class="inner">
                          <p>Q1の答え</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <a href="#" class="square_btn">◀</a>
            <a href="#" class="square_btn">QUIT</a>
            <a href="#" class="square_btn">▶</a>

        
        
    </body>
</html>
                           